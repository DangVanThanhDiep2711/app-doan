
<link rel="stylesheet" href="{{asset('js/style.css')}}">
<div class="login-form">
<div class="form-title">
    Member Login
</div>
<div class="form-input">
    <label for="username">UserName</label>
    <input type="text" id="username"> 
</div>
<div class="form-input">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
</div>
<div class="captcha">           
    <label for="captcha-input">Enter Captcha</label>
    <div class="preview"></div>
    <div class="captcha-form">
        <input type="text" id="captcha-form" placeholder="Enter captcha text">
        <button class="captcha-refresh">
            <i class="fa fa-refresh"></i>
        </button>
    </div>

</div>
<script>
    (function(){
    const fonts =["cursive","sans-serif","serif","monospace"];
    let captchavalue ="";
    function generateCaptcha (){
    let value = btoa(Math.random()*1000000000);
    value =value.substr(0.5+Math.random()*5);
    captchavalue = value;
    }
function setCaptcha(    ){
   let html= captchavalue.split("").map((char)=>{
        const rotate = -20 + Math.trunc(Math.random()*30);
        const font = Math.trunc(Math.random()*fonts.length);
        return `<span
            style="
            transform:rotate(${rotate}deg);
            font-family:${fonts[font]}
            ">${char}
                </span>`;
    }).join("");
    document.querySelector(".login-form .captcha .preview").innerHTML=html;
}
function initCaptcha(){
    document.querySelector(".login-form .captcha .captcha-refresh").addEventListener("click",function(){
        generateCaptcha ();
        setCaptcha();

    });
    generateCaptcha ();
        setCaptcha();
}
initCaptcha();
})();
</script>