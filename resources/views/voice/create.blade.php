@extends('customer.home')
    @section('css')
        <style type="text/css">
            .section {
                padding: 20px 150px;
            }
            @media (max-width: 768px) {
                .section {
                    padding: 30px 5px;
                }
            }
        </style>

        <style type="text/css">
            div.timer-div {
                display: inline-block;
                line-height: 1;
                padding: 5px;
                margin-top: 3px;
                / font-size: 20px; /
                text-align: center;
                margin-bottom: 10px;
                margin-top: 10px;
            }
            div.timer-div.timer-hours,
            div.timer-div.timer-minutes,
            div.timer-div.timer-seconds {
                font-size: 30px;
                letter-spacing: 1px;
                color: #212529;
            }
            div.timer-div span {
                display: block;
                font-size: 12px;
                color: #6c757d;
                margin-top: 2px;
            }
        </style>
    @endsection

	@section('main')
		<div class="content-wrapper">
			<section class="content">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header bg-info text-white">
								<h3 class="card-title push-right-7">{{ _('Voice Recording & Report') }}</h3>
							</div>

							

							<div class="card-body">
								<div class="col-lg-12 margin-tb">
									<div class="text-center">
										<h4><strong>{{ _('Legal and Human Rights Centre') }}</strong></h4>
										<img src="{{ asset('images/app/lhrc_logo.jpg') }}" class="img-responsive d-block mx-auto" alt="lhrc-logo" title="lhrc-logo" width="60px" height="60px"/>
										<h4 class="text-center" ><strong>{{ _('Human Right Violations Reporting System') }}</strong></h4>
										<h4 class="text-center" style="text-decoration: underline; text-decoration-color:lightslategray; text-underline-offset: 2px;" > {{ _('LHRC RIGHT VIOLANCE VICTIM VOICE RECORDING & REPORT') }}</h4>
									</div>
								</div>

								<form  class=" form-horizontal mx-auto" method="post" action="{{ route('store-voice') }}" enctype="multipart/form-data" style="width: 60%; border: 1px solid lightslategray">
									@csrf
								
								<div class="row pt-3 justify-content-center">
									<div class="col-md-7">
										@if (\Session::has('failure'))
											<div class="alert alert-danger">
												<ul>
													<li>{!! \Session::get('failure') !!}</li>
												</ul>
											</div>
										@endif
									</div>
								</div>
								
								<div class="col-lg-12">
									<section class="section">
										<div class="container">
											<div class="row">
												<div class="col-lg-12">
													<h4>Voice Recording</h4>
												</div>
											</div>

											<!-- Audio record code starts -->
											<div class="row">  
												<div class="col-lg-12">
													<p class="start-recording-text">Click to record voice using your microphone</p>
												</div>                      
												<div class="col-lg-12">
													<p>
														<button type="button" class="btn btn-primary" id="btnStart">START RECORDING</button>
														<button type="button" class="btn btn-danger" id="btnStop">STOP RECORDING</button>
													</p>
												</div>
												<div class="col-lg-12">
													<div class="timer-div"> 
														<div class="timer-div timer-hours">00<span>Hrs</span></div> 
														<div class="timer-div timer-minutes">00<span>Mins</span></div> 
														<div class="timer-div timer-seconds">00<span>Secs</span></div> 
													</div>
												</div>

												<div class="col-lg-12 text-left">
													<p class="preview-recording-text" style="display: none;">Preview your recording.</p>
								
													<!--for record-->
													<audio id="dummyAudioPlayer" style="display: none;margin: auto;" controls></audio>
													<!--'controls' use for add play, pause, and volume-->
								
													<!--for play the audio-->
													<audio style="display: none; margin-bottom: 10px;" id="previewAudioPlayer" controls></audio>
												</div>
											</div>
											<!-- Audio record code ends -->

											<div class="row" id="uploadAudioRecorded" style="display: none;">
												<div class="col-md-12">
													<h4>Voice Uploading</h4>
												</div>
												<div class="col-md-10">
													<div class="custom-file">
														<input type="file" class="custom-file-input form-control{{ $errors->has('victim_voice') ? ' is-invalid' : '' }}" name="victim_voice" id="upFile" required >
														<label class="custom-file-label" for="victim_voice">Choose voice file</label>
														<small id="victim_voice" class="form-text text-muted">Please name your voice file with your name.</small>
														
														@if ($errors->has('victim_voice'))
															<span class="invalid-feedback">
																<strong>{{ $errors->first('victim_voice') }}</strong>
															</span>
														@endif
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="card-footer">
									<div class="float-left">
										<a class="btn btn-info" href="{{ route('customer/home') }}">&laquo; {{ _('Back') }}</a> 
									</div>

									<div class="float-right">
										<button type="submit" class="btn btn-success" >{{ _('Save') }} &raquo;</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
		{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}
		{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

		<script type="text/javascript">
			var recordedAudioData = null;
			var c = 0;
			var t;
			var timer_is_on = 0;
			
			let audioIN = { audio: true };
			//  audio is true, for recording
			
			// Access the permission for use
			// the microphone
			navigator.mediaDevices.getUserMedia(audioIN)  
				// 'then()' method returns a Promise
			.then(function (mediaStreamObj) {  
				// Connect the media stream to the
				// first audio element
				let audio = document.querySelector('audio');
				//returns the recorded audio via 'audio' tag

				// 'srcObject' is a property which 
				// takes the media object
				// This is supported in the newer browsers
				if ("srcObject" in audio) {
					audio.srcObject = mediaStreamObj;
				}
				else {   // Old version
					audio.src = window.URL
						.createObjectURL(mediaStreamObj);
				}

				// It will play the audio
				audio.onloadedmetadata = function (ev) {  
					// Play the audio in the 2nd audio
					// element what is being recorded
					// s
				};
			
					// Start record
				let start = document.getElementById('btnStart');

				// Stop record
				let stop = document.getElementById('btnStop');

				// 2nd audio tag for play the audio
				let playAudio = document.getElementById('previewAudioPlayer');

				// This is the main thing to recorde 
				// the audio 'MediaRecorder' API
				let mediaRecorder = new MediaRecorder(mediaStreamObj);
				// Pass the audio stream 

				// Start event
				start.addEventListener('click', function (ev) {
					mediaRecorder.start();
					document.getElementById('previewAudioPlayer').style.display="none";
					startTimer();
					// audio.play();
					// console.log(mediaRecorder.state);
				})
			
				// Stop event
				stop.addEventListener('click', function (ev) {
					mediaRecorder.stop();
					document.getElementById('previewAudioPlayer').style.display="block";
					document.getElementById('dummyAudioPlayer').style.display="none";
					document.getElementById('uploadAudioRecorded').style.display="inline";
					// ev.stopActiveConnection();
					// console.log(mediaRecorder.state);
				});

				// If audio data available then push 
				// it to the chunk array
				mediaRecorder.ondataavailable = function (ev) {
					dataArray.push(ev.data);
				}
			
				// Chunk array to store the audio data 
				let dataArray = [];
			
				// Convert the audio data in to blob 
				// after stopping the recording
				mediaRecorder.onstop = function (ev) {
					stopTimer();
					restTimer();
			
					// blob of type mp3
					let audioData = new Blob(dataArray, 
								{ 'type': 'audio/mp3;' });
					
					// After fill up the chunk 
					// array make it empty
					dataArray = [];

					// Creating audio url with reference 
					// of created blob named 'audioData'

					
					recordedAudioData = audioData;

					var d = new Date();
					recordedAudioData = new File([audioData],d.valueOf(),{ type:"audio/mp3" })
					console.log(recordedAudioData);
					// document.getElementById('upFile').value = recordedAudioData;

					console.log(audioData);


					let audioSrc = window.URL
						.createObjectURL(audioData);

					console.log(audioData);


					// Pass the audio url to the 2nd video tag
					playAudio.src = audioSrc;
				}
			})  
			// If any error occurs then handles the error 
			.catch(function (err) {
				console.log(err.name, err.message);
			});

			// secondsToHourMinuteSecond
			function secondsToHourMinuteSecond(d) {
				d = Number(d);
				var h = Math.floor(d / 3600);
				var m = Math.floor(d % 3600 / 60);
				var s = Math.floor(d % 3600 % 60);

				var hDisplay = h > 0 ? h + (h == 1 ? "" : "") : "0";
				var mDisplay = m > 0 ? m + (m == 1 ? "" : "") : "0";
				var sDisplay = s > 0 ? s + (s == 1 ? "" : "") : "0";

				var returnData = {};
				returnData.h = (hDisplay >= 10)?hDisplay:('0'+hDisplay);
				returnData.m = (mDisplay >= 10)?mDisplay:('0'+mDisplay);
				returnData.s = (sDisplay >= 10)?sDisplay:('0'+sDisplay);

				return returnData; 
			}

			// timerTimedCount
			function timerTimedCount() {
				var timer = secondsToHourMinuteSecond(c);
				$('.timer-div.timer-hours').html(timer.h + ' <span>Hrs</span>');
				$('.timer-div.timer-minutes').html(timer.m + ' <span>Mins</span>');
				$('.timer-div.timer-seconds').html(timer.s + ' <span>Secs</span>');
				$('.count-timer-text').css('display', 'block');
				c=c+1;
				t=setTimeout("timerTimedCount()",1000);
			}

			// startTimer
			function startTimer() {
				$('.preview-recording-text').css('display', 'none');
				if (!timer_is_on) {
					timer_is_on=1;
					timerTimedCount();
				}
			}

			// stopTimer
			function stopTimer() {
				clearTimeout(t);
				timer_is_on=0;
				$('#timeCounterSpan').html(c);
				$('.count-timer-text').css('display', 'none');
				$('.preview-recording-text').css('display', 'block');
			}

			// restTimer
			function restTimer() {
				c=0
				$('#timeCounterSpan').html(c);
				$('.count-timer-text').css('display', 'none');
			}

			$(function () {
              bsCustomFileInput.init();
            });

		</script>
	@stop