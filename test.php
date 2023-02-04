<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
</head>
<body>
	<button onclick="vooiestyuff()">click me</button>
</body>
<script>
           function vooiestyuff() {
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    console.log("listening, please speak...");
                };
                
                recognition.onspeechend = function() {
                    console.log("stopped listening, hope you are done...");
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    console.log(transcript);
                };
              
                 // start recognition
                 recognition.start();
            }

</script>
</html>