// Require and configure dotenv at the top of your Node.js script
require('dotenv').config();

// Access the API key using process.env
const gmap = process.env.GMAP_KEY;

// Output the API key to the console (for testing purposes)
console.log(gmap);
