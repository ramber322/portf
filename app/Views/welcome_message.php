<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Data used: $name -->
    <title><?= esc($name) ?> — Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
            color: #212529;
            background: #f7f8f9;
            line-height: 1.6;
        }
        header {
            background: #dd4814;
            color: #fff;
            padding: 4rem 1.5rem;
            text-align: center;
        }
        header h1 { font-size: 2.5rem; }
        header p  { font-size: 1.2rem; opacity: .9; }
        section {
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
        }
        h2 {
            border-bottom: 2px solid #dd4814;
            padding-bottom: .5rem;
            margin-bottom: 1.5rem;
        }
        .skills span {
            display: inline-block;
            background: #dd4814;
            color: #fff;
            padding: .3rem .8rem;
            border-radius: 20px;
            margin: .2rem;
            font-size: .9rem;
        }
        .project {
            background: #fff;
            border-left: 4px solid #dd4814;
            padding: 1rem 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 1px 3px rgba(0,0,0,.08);
        }
        .project h3 { margin-bottom: .3rem; }
        .project a { color: #dd4814; text-decoration: none; font-weight: 600; }
        footer {
            background: #212529;
            color: #ccc;
            text-align: center;
            padding: 1.5rem;
            font-size: .9rem;
        }
        footer a { color: #dd4814; }
    </style>
</head>
<body>

<header>
    <h1><?= esc($name) ?></h1>
    <p><?= esc($title) ?></p>
</header>

<main>
<section>
    <h2>About Me</h2>
    <p><?= esc($about) ?></p>
</section>

<section>
    <h2>Skills</h2>
    <div class="skills">
        <?php foreach ($skills as $skill): ?>
            <span><?= esc($skill) ?></span>
        <?php endforeach; ?>
    </div>
</section>

<section>
    <h2>Projects</h2>
    <!-- Data used: $projects (loop over array of arrays) -->
    <?php foreach ($projects as $project): ?>
        <div class="project">
            <h3><?= esc($project['title']) ?></h3>
            <p><?= esc($project['desc']) ?></p>
            <a href="<?= esc($project['link']) ?>">View Project →</a>
        </div>
    <?php endforeach; ?>
</section>

<section>
    <h2>Contact</h2>
    <!-- Data used: $email, $github -->
    <p>Email: <a href="mailto:<?= esc($email) ?>"><?= esc($email) ?></a></p>
    <p>GitHub: <a href="<?= esc($github) ?>" target="_blank"><?= esc($github) ?></a></p>
</section>

    </main>

<footer>
    <p>&copy; <?= date('Y') ?> <?= esc($name) ?>. Built with CodeIgniter <?= \CodeIgniter\CodeIgniter::CI_VERSION ?>.</p>
</footer>

</body>
</html>