
<link rel="stylesheet" type="text/css" href="links/event-style.css" />
<style>
img#floatcenter {
width:780px;
height:200px;
margin: 10px 10px 10px 6px;
border: 2px solid #333;
border-image: initial;
}
</style>
<script type="text/javascript" src="links/event-page.js"></script>
<script>
$(document).ready(function() {
	  document.getElementById("loadingImage").style.visibility="hidden";});
	  </script>

<!-- voice-control-car Tabs list ------------->
         
       <div id="voice-control-car1">
     	<h1>Voice control car</h1>
    	<ul id="boxLinks" class="tabs">       
		<li><b><a id="tab1" href="#">Introduction</a></b></li>
        <li><b><a id="tab2" href="#">Task and Setup</a></b></li>
        <li><b><a id="tab3" href="#">Game procedure</a></b></li>
        <li><b><a id="tab4" href="#">Rules</a></b></li>
        <li><b><a id="tab5" href="#">Registration</a></b></li>
    	</ul>
        
<div id="tabDisplay">
<!-- Home tab content goes here --><br/>
              <h2 align="left">INTRODUCTION :</h2>
              <p>In a world of increasing sophistication, and security, new technologies are forever in demand. Your voice and the frequencies within are as unique as the whorls in your fingerprints. That said, we can't just keep our mouths shut. Speaking is second nature to humans, and is therefore a very intuitive method of data input and human computer interface. A quick one too.</p>
              <img src="images/voice_control_car.jpg" id="floatcenter" />

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ever dreamed of being in a batmobile ? That might seem far removed from reality, but we at Aagomani bring you one step closer to your dream car. One that responds to your voice. Your voice alone. Flatter yourself, make the meanest speech recognition device ever, and ride away to glory !</p>
              </div>
              
              
              
	<div id="box">
              
              <div id="tab11" class="tab"><br/>
              <h2 align="left">INTRODUCTION :</h2>              
              <p>In a world of increasing sophistication, and security, new technologies are forever in demand. Your voice and the frequencies within are as unique as the whorls in your fingerprints. That said, we can't just keep our mouths shut. Speaking is second nature to humans, and is therefore a very intuitive method of data input and human computer interface. A quick one too.</p>
              <img src="images/voice_control_car.jpg" id="floatcenter" />

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ever dreamed of being in a batmobile ? That might seem far removed from reality, but we at Aagomani bring you one step closer to your dream car. One that responds to your voice. Your voice alone. Flatter yourself, make the meanest speech recognition device ever, and ride away to glory !</p>
			
            </div>
              
              
              <div id="tab21" class="tab"><br/>
              <h2 align="left">TASK :</h2>
<p>Build a hardware device which recognizes 4 navigational voice commands, namely, go, stop, left and right and convey the same using simple 4 wire interface.</p>
			  <h2 align="left">SETUP :</h2>
<p align="left"><b>*</b> The voice commands are taken as input by an external device built by participants. This &nbsp;&nbsp;device is supposed to recognize four voice commands by doing some sort of speech &nbsp;&nbsp;processing and make corresponding signal logically high.</p>
<p align="left"><b>*</b> An interfacing circuit provided by us read these four signals corresponding to go, stop, &nbsp;&nbsp;left and right continuously and send it to a computer via USB interface.</p>
<p align="left"><b>*</b> A software, again provided by us, reads in data sent by usb interface and maneuver the &nbsp;&nbsp;car accordingly.</p>
              </div>

              
              <div id="tab31" class="tab"><br/>
              <h2 align="left">GAME PROCEDURE :</h2>
<p align="left"><b>*</b> Before start of game, each team will be given a practice slot of 10 min. Teams can also &nbsp;&nbsp;buy the interfacing device and software at subsidized price.</p>
<p align="left"><b>*</b> Competition will be conducted in two rounds, elimination and final round.</p>
<p align="left"><b>*</b> Each team will be given two runs in the elimination round best of which will be &nbsp;&nbsp;considered for qualifying into final round. Any restart will be considered as a new run.</p>
<p align="left"><b>*</b> Final round will be one single run. The winners will be decided by the minimum time &nbsp;&nbsp;taken to complete the race in the final round.</p>
              
              </div>
              
              
              <div id="tab41" class="tab"><br/>
              <h2 align="left">DEVICE SPECIFICATIONS :</h2>
<p align="left"><b>*</b> The device built by participants should have mic as the only input interface and a 4 wire &nbsp;&nbsp;port in addition to common ground as the only output interface.</p>
<p align="left"><b>*</b> It may powered by outside source. Note only 210V AC supply can be provided by organisation team.</p>
<p align="left"><b>*</b> The four output signals are considered logical high only in between 3 and 5 Volts.</p>
<p align="left"><b>*</b> The teams are allowed to use ready-made micro-controller boards without any penalty.</p>

			 <h2 align="left">RULES :</h2>
<p align="left"><b>*</b> A team may have a maximum of 3 members.</p>
<p align="left"><b>*</b> Any team which is not ready in given timeslot will be disqualified.</p>
              
              </div>
              
              
              <div id="tab51" class="tab"><br/>
              <h1>REGISTER</h1> 

   					<form style="margin:30px 0px 0px 24px;" method="post" action="event_reg_submit.php">
              		<input type="hidden" value="Voice Control Car" name="comp_name" />
    
    				<label for="participants">Number of Participants including team leader :</label>
					<select id="participants" onChange="createForm(this.selectedIndex)" style="width:95px; height:30px; padding:6px;">
					<option selected="selected" style="padding:6px;">Choose</option>
    				<option style="padding:6px;">1</option>
   					<option style="padding:6px;">2</option>
    				<option style="padding:6px;">3</option>
					</select><br/><br/>
             		<?php require_once '../event_registration.php' ; ?>
                    </form>
              </div>
              
           </div>
        
     	 </div>