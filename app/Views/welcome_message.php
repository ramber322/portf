<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($name) ?> Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  </head>
<body>

<div class="sheet">

    <header class="sheet-header">
        <h1><?= esc($name) ?></h1>
        <p class="title"><?= esc($title) ?></p>
        <p class="contact-line">
            <span><?= esc($contact['email']) ?></span>
            <span><?= esc($contact['phone']) ?></span>
            <span><?= esc($contact['address']) ?></span>
        </p>
        <p class="contact-line">
            <span><a href="<?= esc($contact['github']) ?>" target="_blank" rel="noopener">GitHub</a></span>
            <span><a href="<?= esc($contact['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a></span>
        </p>
    </header>

    <main>
        <section>
            <h2>Personal Information</h2>
            <dl class="info-grid">
                <?php foreach ($personal as $label => $value): ?>
                    <dt><?= esc($label) ?></dt>
                    <dd><?= esc($value) ?></dd>
                <?php endforeach; ?>
            </dl>
        </section>

       
        <section>
            <h2>Career Objective</h2>
            <p><?= esc($objective) ?></p>
        </section>

      
        <section>
            <h2>Education</h2>
            <?php foreach ($education as $edu): ?>
                <div class="entry">
                    <div class="entry-header">
                        <strong><?= esc($edu['school']) ?></strong>
                        <span class="year"><?= esc($edu['year']) ?></span>
                    </div>
                    <div class="entry-sub"><?= esc($edu['degree']) ?></div>
                </div>
            <?php endforeach; ?>
        </section>

       
        <section>
            <h2>Skills</h2>
            <?php foreach ($skills as $category => $items): ?>
                <div class="skill-group">
                    <strong><?= esc($category) ?>:</strong>
                    <?php foreach ($items as $skill): ?>
                        <span><?= esc($skill) ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </section>

     
        <section>
            <h2>Projects</h2>
            <?php foreach ($projects as $project): ?>
                <div class="project">
                    <h3><?= esc($project['title']) ?></h3>
                    <p><?= esc($project['desc']) ?></p>
                    <a href="<?= esc($project['link']) ?>" target="_blank" rel="noopener">
                        View Project →
                    </a>
                </div>
            <?php endforeach; ?>
        </section>

    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> <?= esc($name) ?>. Built with CodeIgniter <?= \CodeIgniter\CodeIgniter::CI_VERSION ?>.</p>
    </footer>

</div>

</body>
</html>