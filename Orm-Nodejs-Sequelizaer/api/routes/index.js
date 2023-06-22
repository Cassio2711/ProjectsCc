const bodyParser = require("body-parser");
const pessoas = require ('./pessoasRouter.js')

module.exports = app =>{
	app.use(bodyParser.json());
	app.use(bodyParser.urlencoded({extended:false}))
	app.use(pessoas);	
}
