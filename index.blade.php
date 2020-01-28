<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>JS Drum</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
 
<div class="keys">
	<div data-key="65" class="key">
		<kbd>A</kbd>
		<span class="sound">clap</span>
	</div>
	<div data-key="83" class="key">
		<kbd>S</kbd>
		<span class="sound">hihat</span>
	</div>
	<div data-key="68" class="key">
		<kbd>D</kbd>
		<span class="sound">kick</span>
	</div>
	<div data-key="70" class="key">
		<kbd>F</kbd>
		<span class="sound">openhat</span>
	</div>
	<div data-key="71" class="key">
		<kbd>G</kbd>
		<span class="sound">traingle</span>
	</div>
	<div data-key="72" class="key">
		<kbd>H</kbd>
		<span class="sound">rim</span>
	</div>
	<div data-key="74" class="key">
		<kbd>J</kbd>
		<span class="sound">snare</span>
	</div>
	<div data-key="75" class="key">
		<kbd>K</kbd>
		<span class="sound">tom</span>
	</div>
	<div data-key="76" class="key">
		<kbd>L</kbd>
		<span class="sound">tink</span>
	</div>

	<audio data-key="65" src="music/clap.wav"></audio>

	<audio data-key="83" src="music/hihat.wav"></audio>

	<audio data-key="68" src="music/kick.wav"></audio>
  	<audio data-key="70" src="music/openhat.wav"></audio>
  	<audio data-key="71" src="music/traingle.wav"></audio>
  	<audio data-key="72" src="music/rim.wav"></audio>
  	<audio data-key="74" src="music/snare.wav"></audio>
  	<audio data-key="75" src="music/tom.wav"></audio>
  	<audio data-key="76" src="music/tink.wav"></audio>
</div>


<script >
  function playSound(e) {
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
    if (!audio) return; // stop the function from running all together 

    audio.currentTime = 0; // rewind to the start
    audio.play();
    key.classList.add('playing');
  }
    function removeTransition(e) {
    if (e.propertyName !== 'transform') return; // skip it if it's not a transform
    this.classList.remove('playing');
  }

  const keys = document.querySelectorAll('.key');
  keys.forEach(key => key.addEventListener('transitionend', removeTransition));
  window.addEventListener('keydown', playSound);
</script>



</body>
</html>