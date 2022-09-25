const typewriter = (param) => {

  let el = document.querySelector(param.el);
  let speed = param.speed;
  let string = param.string.split("");
  string.forEach((char, index) => {
      setTimeout(() => {
          el.textContent += char;
      }, speed * index);
  });
};
typewriter({
  el: ".typewriter", //要素
  string: "My Portfolio!!", //文字列
  speed: 200 //速度
});


  $(function () {
    var pagetop = $('#js-pagetop');
    pagetop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 80) {
        pagetop.fadeIn(300);
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function () {
      $('body, html').animate({
          scrollTop: 0
      }, 500);
      return false;
    });
  });