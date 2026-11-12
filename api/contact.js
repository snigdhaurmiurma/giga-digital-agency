/**
 * GIGA DIGITAL AGENCY — PRODUCTION SERVERLESS EMAIL HANDLER
 * Vercel Serverless Function (Node.js)
 * 
 * Supports:
 * 1. Resend API (Recommended on Vercel: set RESEND_API_KEY)
 * 2. Custom Webhook / SMTP Forwarding
 * 
 * Destination: info@gigadigitalagency.com
 */

module.exports = async (req, res) => {
  // CORS Headers
  res.setHeader('Access-Control-Allow-Credentials', 'true');
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
  );

  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  if (req.method !== 'POST') {
    return res.status(405).json({
      status: 'error',
      message: 'Method Not Allowed. Only POST requests are accepted.'
    });
  }

  try {
    const body = req.body || {};
    const name = (body.name || '').trim();
    const email = (body.email || '').trim();
    const phone = (body.phone || '').trim();
    const service = (body.service || '').trim();
    const budget = (body.budget || 'Not Specified').trim();
    const message = (body.message || body.details || '').trim();
    const type = (body.type || 'quotation').toLowerCase(); // 'contact' or 'quotation'

    // Form Validation
    const errors = {};
    if (!name || name.length < 2) {
      errors.name = 'Please provide your full name (minimum 2 characters).';
    }
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
      errors.email = 'Please provide a valid business email address.';
    }
    if (!phone || phone.length < 8) {
      errors.phone = 'Please provide a valid contact telephone number.';
    }
    if (!service) {
      errors.service = 'Please select a service category.';
    }
    if (!message || message.length < 5) {
      errors.message = 'Please provide project details or a brief message (minimum 5 characters).';
    }

    if (Object.keys(errors).length > 0) {
      return res.status(422).json({
        status: 'validation_error',
        message: 'Please complete all required fields correctly.',
        errors
      });
    }

    const referenceId = 'GDA-' + Date.now().toString().slice(-6);
    const destinationEmail = process.env.CONTACT_RECEIVER_EMAIL || 'info@gigadigitalagency.com';
    const senderEmail = process.env.EMAIL_FROM || 'Giga Digital Agency <onboarding@resend.dev>';
    const isQuote = type.includes('quote') || type.includes('quotation');
    const subject = isQuote
      ? `New Quotation Request [${referenceId}] — ${name} (${service})`
      : `New Website Contact Inquiry [${referenceId}] — ${name}`;

    const submittedAt = new Date().toLocaleString('en-US', {
      timeZone: 'Asia/Dhaka',
      dateStyle: 'full',
      timeStyle: 'medium'
    }) + ' (BST)';

    // Build Polished HTML Email Template
    const htmlContent = `
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>${subject}</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f9; margin: 0; padding: 24px; color: #1e293b; }
    .card { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 16px rgba(0,0,0,0.06); }
    .header { background: #0f172a; padding: 28px 32px; color: #ffffff; text-align: left; border-bottom: 3px solid #1d4ed8; }
    .logo-text { font-size: 20px; font-weight: 800; letter-spacing: 0.05em; color: #ffffff; text-transform: uppercase; }
    .badge { display: inline-block; background: rgba(29, 78, 216, 0.25); color: #60a5fa; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 9999px; margin-top: 8px; text-transform: uppercase; }
    .content { padding: 32px; }
    .field-row { margin-bottom: 20px; }
    .field-label { font-size: 12px; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px; }
    .field-value { font-size: 15px; color: #0f172a; font-weight: 600; line-height: 1.5; }
    .field-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 16px; margin-top: 6px; font-size: 15px; color: #334155; line-height: 1.6; white-space: pre-wrap; }
    .footer { background: #f8fafc; padding: 20px 32px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; text-align: center; }
    .cta-btn { display: inline-block; background: #1d4ed8; color: #ffffff !important; text-decoration: none; padding: 10px 20px; border-radius: 6px; font-weight: 700; font-size: 14px; margin-top: 12px; }
  </style>
</head>
<body>
  <div class="card">
    <div class="header">
      <div class="logo-text">GIGA DIGITAL AGENCY</div>
      <div class="badge">${isQuote ? 'Quotation Request' : 'Contact Inquiry'} &bull; Ref #${referenceId}</div>
    </div>
    <div class="content">
      <h2 style="margin-top:0; font-size:20px; color:#0f172a; font-weight:800;">${isQuote ? 'New Project Quotation Request' : 'New Website Contact Inquiry'}</h2>
      
      <div class="field-row">
        <div class="field-label">Client Name</div>
        <div class="field-value">${name}</div>
      </div>

      <div class="field-row">
        <div class="field-label">Email Address</div>
        <div class="field-value"><a href="mailto:${email}" style="color:#1d4ed8; text-decoration:none;">${email}</a></div>
      </div>

      <div class="field-row">
        <div class="field-label">Telephone Number</div>
        <div class="field-value"><a href="tel:${phone}" style="color:#1d4ed8; text-decoration:none;">${phone}</a></div>
      </div>

      <div class="field-row">
        <div class="field-label">Requested Service</div>
        <div class="field-value" style="color:#059669; font-weight:700;">${service}</div>
      </div>

      ${budget ? `
      <div class="field-row">
        <div class="field-label">Estimated Budget</div>
        <div class="field-value">${budget}</div>
      </div>` : ''}

      <div class="field-row">
        <div class="field-label">Project Details &amp; Message</div>
        <div class="field-box">${message}</div>
      </div>

      <div style="margin-top:28px; text-align:center;">
        <a href="mailto:${email}?subject=Re:%20Giga%20Digital%20Agency%20—%20${encodeURIComponent(service)}" class="cta-btn">Reply to Client Directly</a>
      </div>
    </div>
    <div class="footer">
      Delivered directly to <strong>${destinationEmail}</strong><br>
      Submitted on ${submittedAt} via gigadigitalagency.com
    </div>
  </div>
</body>
</html>
`;

    const textContent = `
GIGA DIGITAL AGENCY — ${isQuote ? 'QUOTATION REQUEST' : 'CONTACT INQUIRY'}
Reference: ${referenceId}
Date: ${submittedAt}

Client Name: ${name}
Email: ${email}
Phone: ${phone}
Service: ${service}
Budget: ${budget}

Message / Project Scope:
${message}

--------------------------------------------------
Delivered to: ${destinationEmail}
`;

    // 1. Send via Resend API if RESEND_API_KEY is configured
    if (process.env.RESEND_API_KEY) {
      const resendResponse = await fetch('https://api.resend.com/emails', {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${process.env.RESEND_API_KEY}`,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          from: senderEmail,
          to: [destinationEmail],
          reply_to: email,
          subject: subject,
          html: htmlContent,
          text: textContent
        })
      });

      const resendData = await resendResponse.json();

      if (resendResponse.ok) {
        return res.status(200).json({
          status: 'success',
          message: `Thank you, ${name}! Your quotation request has been successfully delivered to our strategy team (Ref #${referenceId}). We will review your brief and contact you within 24 business hours.`,
          reference_id: referenceId,
          delivery_id: resendData.id
        });
      } else {
        console.error('Resend delivery error:', resendData);
        return res.status(502).json({
          status: 'error',
          code: 'MAIL_DELIVERY_FAILED',
          message: 'Unable to deliver message at this moment. Please reach out to us directly on WhatsApp or phone.',
          details: resendData.message || 'Upstream provider error'
        });
      }
    }

    // 2. If RESEND_API_KEY is not yet defined in Vercel environment:
    // Return a clear, informative status indicating environment configuration is required
    console.warn('RESEND_API_KEY is not configured in environment variables.');
    return res.status(200).json({
      status: 'pending_configuration',
      reference_id: referenceId,
      message: `Your inquiry has been logged (Ref #${referenceId}). To activate automated inbox delivery, please set RESEND_API_KEY in your Vercel Project Environment Variables.`,
      whatsapp_url: `https://wa.me/8801870699677?text=${encodeURIComponent(`Hello Giga Digital Agency, I submitted quotation request #${referenceId} for ${service}: ${name} (${phone})`)}`
    });

  } catch (err) {
    console.error('API submission error:', err);
    return res.status(500).json({
      status: 'error',
      message: 'An internal server error occurred while processing your request. Please contact us directly via WhatsApp (+8801870-699677).'
    });
  }
};
