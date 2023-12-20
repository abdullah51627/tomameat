 (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/js/pages/session-timeout.init.js ***!
  \****************************************************/
/*





*/
$.sessionTimeout({
  keepAliveUrl: 'pages-starter.html',
  logoutButton: 'Logout',
  logoutUrl: 'auth-login',
  redirUrl: 'auth-lock-screen.html',
  warnAfter: 3000,
  redirAfter: 30000,
  countdownMessage: 'Redirecting in {timer} seconds.'
});
$('#session-timeout-dialog  [data-dismiss=modal]').attr("data-bs-dismiss", "modal");
 })()
;
