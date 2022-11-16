const express = require("express");
const { get } = require("http");

const app = express();

app.use( express.static('public'));

app.get("/", function (req, res) {
  res.send("Bienvenido");
});

app.get("/contacts", (req, res) => {
    res.sendFile(__dirname+ "/public/views/home.html");
  });

app.listen(8081);
