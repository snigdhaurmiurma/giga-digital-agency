/**
 * GIGA DIGITAL AGENCY — PRODUCTION SERVERLESS EMAIL HANDLER
 * Vercel Serverless Function (Node.js)
 * 
 * Supports:
 * 1. Resend API (Recommended on Vercel: set RESEND_API_KEY)
 * 2. Fallback clear notification when credentials pending
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
    let body = req.body || {};
    if (typeof body === 'string') {
      try {
        body = JSON.parse(body);
      } catch (e) {
        body = {};
      }
    }

    const name = (body.name || '').trim();
    const email = (body.email || '').trim();
    const phone = (body.phone || '').trim();
    const service = (body.service || '').trim();
    const budget = (body.budget || 'Not Specified').trim();
    const message = (body.message || body.details || '').trim();
    const type = (body.type || 'quotation').toLowerCase();

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

    let submittedAt = '';
    try {
      submittedAt = new Date().toLocaleString('en-US', {
        timeZone: 'Asia/Dhaka'
      }) + ' (BST)';
    } catch {
      submittedAt = new Date().toISOString();
    }

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
    .msg-box { background: #f8fafc; border-left: 4px solid #1d4ed8; padding: 16px; border-radius: 0 8px 8px 0; font-size: 14px; line-height: 1.6; color: #334155; margin-top: 6px; }
    .footer { background: #f8fafc; padding: 20px 32px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
    .btn { display: inline-block; background: #1d4ed8; color: #ffffff !important; text-decoration: none; padding: 10px 20px; border-radius: 6px; font-weight: 700; font-size: 13px; margin-top: 14px; }
  </style>
</head>
<body>
  <div class="card">
    <div class="header">
      <div class="logo-text">GIGA DIGITAL AGENCY</div>
      <div class="badge">${isQuote ? 'Quotation Request' : 'Direct Inquiry'} &bull; Reference #${referenceId}</div>
    </div>
    <div class="content">
      <div class="field-row">
        <div class="field-label">Lead Name</div>
        <div class="field-value">${name}</div>
      </div>
      <div class="field-row">
        <div class="field-label">Official Email</div>
        <div class="field-value"><a href="mailto:${email}" style="color:#1d4ed8;">${email}</a></div>
      </div>
      <div class="field-row">
        <div class="field-label">Contact Telephone / WhatsApp</div>
        <div class="field-value"><a href="tel:${phone}" style="color:#1d4ed8;">${phone}</a> &bull; <a href="https://wa.me/${phone.replace(/[^0-9]/g, '')}" style="color:#16a34a;">Open WhatsApp</a></div>
      </div>
      <div class="field-row">
        <div class="field-label">Service Discipline</div>
        <div class="field-value" style="color:#1d4ed8;">${service}</div>
      </div>
      <div class="field-row">
        <div class="field-label">Budget Tier</div>
        <div class="field-value">${budget}</div>
      </div>
      <div class="field-row">
        <div class="field-label">Project Scope / Message</div>
        <div class="msg-box">${message.replace(/\n/g, '<br>')}</div>
      </div>
      <div style="margin-top:24px; padding-top:20px; border-top:1px solid #e2e8f0;">
        <a href="mailto:${email}?subject=Re:%20${encodeURIComponent(subject)}" class="btn">Reply Directly to Client</a>
      </div>
    </div>
    <div class="footer">
      Automated dispatch from Giga Digital Agency Portal (${submittedAt})<br>
      Receiving Inbox: ${destinationEmail}
    </div>
  </div>
</body>
</html>
`;

    const textContent = `
==================================================
GIGA DIGITAL AGENCY — NEW SUBMISSION
Reference: ${referenceId}
Type: ${isQuote ? 'Quotation Request' : 'Direct Inquiry'}
Timestamp: ${submittedAt}
==================================================

Client Name: ${name}
Email: ${email}
Phone: ${phone}
Service Required: ${service}
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
          message: `Thank you, ${name}! Your request has been delivered to info@gigadigitalagency.com (Ref #${referenceId}). A senior strategist will contact you within 24 business hours.`,
          reference_id: referenceId,
          delivery_id: resendData.id
        });
      } else {
        console.error('Resend delivery error:', resendData);
        return res.status(502).json({
          status: 'error',
          code: 'MAIL_DELIVERY_FAILED',
          message: 'Unable to deliver message through Resend at this moment.',
          details: resendData.message || 'Upstream provider error'
        });
      }
    }

    // 2. If RESEND_API_KEY is not yet defined in Vercel environment:
    return res.status(200).json({
      status: 'pending_configuration',
      reference_id: referenceId,
      message: `Your request has been logged successfully (Ref #${referenceId}). To activate automated inbox delivery to info@gigadigitalagency.com, set RESEND_API_KEY in your Vercel Project Environment Variables.`,
      whatsapp_url: `https://wa.me/8801870699677?text=${encodeURIComponent(`Hello Giga Digital Agency, I submitted request #${referenceId} for ${service}: ${name} (${phone})`)}`
    });

  } catch (err) {
    console.error('API submission error:', err);
    return res.status(500).json({
      status: 'error',
      message: err.message || 'An internal server error occurred while processing your request.'
    });
  }
};
