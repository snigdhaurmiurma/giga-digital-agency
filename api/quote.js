/**
 * GIGA DIGITAL AGENCY — QUOTATION SERVERLESS ENDPOINT
 * Forwards quotation submissions to api/contact.js
 */
const contactHandler = require('./contact');

module.exports = async (req, res) => {
  if (req.body && !req.body.type) {
    req.body.type = 'quotation';
  }
  return contactHandler(req, res);
};
