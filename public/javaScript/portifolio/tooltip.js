// bootstrap descrição tecnologias
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


//typing 

function prettyLog(text) {
    //console.log(text); // Substitua com sua lógica de log
  }

  var typed = new Typed("#element", {
      stringsElement: '#typed-strings',
      typeSpeed: 50,  // Velocidade de digitação
      backSpeed: 50,  // Velocidade de apagar
      backDelay: 500,
      startDelay: 1000,
      loop: false,
      onBegin: function(self) { prettyLog('onBegin ' + self) },
      onComplete: function(self) { prettyLog('onComplete ' + self) },
      preStringTyped: function(pos, self) { prettyLog('preStringTyped ' + pos + ' ' + self); },
      onStringTyped: function(pos, self) { prettyLog('onStringTyped ' + pos + ' ' + self) },
      onLastStringBackspaced: function(self) { prettyLog('onLastStringBackspaced ' + self) },
      onTypingPaused: function(pos, self) { prettyLog('onTypingPaused ' + pos + ' ' + self) },
      onTypingResumed: function(pos, self) { prettyLog('onTypingResumed ' + pos + ' ' + self) },
      onReset: function(self) { prettyLog('onReset ' + self) },
      onStop: function(pos, self) { prettyLog('onStop ' + pos + ' ' + self) },
      onStart: function(pos, self) { prettyLog('onStart ' + pos + ' ' + self) },
      onDestroy: function(self) { prettyLog('onDestroy ' + self) }
  });