<header>
    <span class="logo">CRUD</span>
    <nav>
        <a href="/">Главная</a>
        <?php if (isset($_COOKIE['log'])) : ?>
            <a href="/login.php" class="btn">Кабинет пользователя</a>
        <?php else : ?>
            <a href="/login.php" class="btn">Войти</a>
            <a href="/register.php" class="btn">Регистрация</a>
        <?php endif; ?>
    </nav>
</header>