const express = require('express')
const app = express()
var cors = require('cors');
app.use(cors({ origin: '*' }));
var bodyParser = require('body-parser')
// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }))

// parse application/json
app.use(bodyParser.json())

app.get('/:userId', function (req, res) {
    console.log(req.params)
    res.send('get');
})

app.post('/', function (req, res) {
    console.log(req.body)
    res.send('post');
})


app.get('/about', function (req, res) {
    res.sendFile(__dirname + '/src/views/about.html');
})

app.listen(3000)