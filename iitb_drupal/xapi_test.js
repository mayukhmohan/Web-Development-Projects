$(document).ready(function() {
	// send our statements
	$("#thatButton").on("click", function() {
		console.log("HEY!");
		send_statement('http://example.com/xapi/interacts', 'interacts', 'Button example', 'http://example.com/button_example', 'Example xAPI Button');
	});
    $("#thatButton2").on("click", function() {
    console.log("HELLO!");
    send_statement('http://example.com/xapi/viewed', 'viewed', 'Button example 2', 'http://example.com/button_example_2', 'Example xAPI Button 2');
   });
});

function send_statement(verbId, verb, name, objectId, description){  
        var conf = {  
             "endpoint" : "https://trial-lrs.yetanalytics.io/xapi/",  
             "auth" : "Basic " + toBase64("d1dc905eda443e08d6ac491f49d922d0:5174cb4f5e56db00f6afc7e2ea51aa52")  
             };  
  
        ADL.XAPIWrapper.changeConfig(conf);  
           
        //define the xapi statement being sent  
        var statement = {  
            "actor": {  
                "mbox": "mailto:Hello@example.com",  
                "name": "Mayukh",  
                "objectType": "Agent"  
            },  
            "verb": {  
                "id": verbId,  
                "display": {"en-US": verb}  
            },  
            "object": {  
                "id": objectId,  
                "definition": {  
                    "name": {"en-US": name},  
                    "description": {"en-US": description}  
                },  
                "objectType": "Activity"  
            }  
        }; //end statement definition  
   
        // Dispatch the statement to the LRS  
        var result = ADL.XAPIWrapper.sendStatement(statement);  
        }