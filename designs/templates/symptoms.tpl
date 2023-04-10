<html>
<head>
	<title>SYMPTOMS</title>
	{literal}
<style>
      .blink {
        animation: blinker 0.6s linear infinite;
        color: green;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .blink-one {
        animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {
        0% {
          opacity: 0;
        }
      }
      .blink-two {
        animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
      }

      .blink1 {
        animation: blinker 0.6s linear infinite;
        color: red;
        font-size: 25px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
      }





    </style>
    {/literal}
</head>
<body>
	<center>
			 <h3>Your Disease is</h3> <p class="blink1">{$disease}</p>
	<table>
		
			<form action="" method="POST">
				<input type="hidden" value="h" name="hide">
			<!-- <tr><th>SYMPTOMS</th></tr> -->
			<tr><td>Symptom 1:<textarea name="symptom1" class="form-control"></textarea></td></tr>
			<tr><td>Symptom 2:<textarea name="symptom2" class="form-control"></textarea></td></tr>
			<tr><td>Symptom 3:<textarea name="symptom3" class="form-control"></textarea></td></tr>
			<tr><td>Symptom 4:<textarea name="symptom4" class="form-control"></textarea></td></tr>
			<tr><td>Symptom 5:<textarea name="symptom5" class="form-control"></textarea></td></tr>
			<tr><td>Other Symptoms:<textarea name="other" class="form-control"></textarea></td></tr>
			<tr><td><input type="SUBMIT" name="SUBMIT" class="btn btn-success"></td></tr>
			</form>
		
	</table>

	</center>
</body>
</html>