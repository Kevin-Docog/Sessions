<?php
session_start();

if (isset($_GET["lang"])) {
    $_SESSION["lang"] = $_GET["lang"];
}

if (!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = "English";
}

$lang = $_SESSION["lang"];

$messages = [
    "English" => "Hello! Welcome to my site.",
    "Spanish" => "¡Hola! Bienvenido a mi sitio.",
    "French"  => "Bonjour! Bienvenue sur mon site.",
    "Filipino" => "Kumusta! Maligayang pagdating sa aking site.",
    "Japanese"=> "こんにちは！私のサイトへようこそ。",
    "Korean"  => "안녕하세요! 제 사이트에 오신 것을 환영합니다."
];
?>


<h2>Language Selector</h2>
<p><?= $messages[$lang]; ?></p>

<a href="?lang=English"><button>English</button></a>
<a href="?lang=Spanish"><button>Spanish</button></a>
<a href="?lang=French"><button>French</button></a>
<a href="?lang=Filipino"><button>Filipino</button></a>
<a href="?lang=Japanese"><button>Japanese</button></a>
<a href="?lang=Korean"><button>Korean</button></a>
