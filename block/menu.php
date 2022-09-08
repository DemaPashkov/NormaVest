<!-- menu -->
<header>
	<div class="menu-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>

<div class="menus">
	<nav>

<div class="menu">
    <div class="left">
        <p>НормаВэст</p>
        <span>Оценка & Экспертиза</span>
    </div>
    <div class="center">
        <div class="link">
            <a href="../index.php" class="active">Главная</a>
        </div>
        <div class="link">
             <a href="../price.php">Цены</a>
        </div>
        <div class="link">
            <a href="../about-us.php">О нас</a>
        </div>
        <div class="link">
            <a href="../contact.php">Контакты</a>
        </div>
    </div>
    <div class="right">
        <div class="icon-mobile">
            <img src="/PNG/phone-call-2.png">
        </div>
        <div class="mobile">
            <p>+7 (495) 645-90-93</p>
        </div>
    </div>
</div>

</nav>
</div>

<script>
    let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menus');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})
</script>
<!-- end menu -->