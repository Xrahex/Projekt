// example in a Node.js env
const request = require('request');
const fs = require('fs');

const options = {
  url: 'https://pdfswitch.io/api/convert/',
  method: 'POST',
  headers: {
    'Authorization': '225b28012f5fb4983fafdc9fc86536a7e158436d' // Replace it with your API Key
  },
  body: {
    source: 'https://www.wikipedia.org/',
    page_orientation: 'portrait'
  },
  json: true,
  encoding: null // this makes the below body a Buffer
};

request.post(options, function (err, response, body) {
  if (!err && response.statusCode == 200) {
    //do something with PDF Buffer
    fs.writeFile('result.pdf', body, function (err) {
      if(err) return console.error('writeFile error:', err);
    })
  } else return console.error('request error:', err);
})
