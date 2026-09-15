<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav class="nav">
    <div class="nav-inner">
        <a href="#" class="nav-logo">Portfolio</a>
        <div class="nav-links">
            <a href="#about">Personal Info</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>


<header class="hero">
    <div class="hero-inner">
        <div class="hero-text">
            <p class="hero-greeting">Hi, I'm</p>
            <h1 class="hero-name"><?= esc($name) ?></h1>
            <p class="hero-tagline"><?= esc($tagline) ?></p>
            <div class="hero-actions">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="<?= esc($contact['github']) ?>" target="_blank" rel="noopener" class="btn btn-outline">
                    GitHub
                </a>
            </div>
        </div>
        <div class="hero-photo">
            <?php if (!empty($photo) && file_exists(FCPATH . $photo)): ?>
                <img src="<?= base_url($photo) ?>" alt="<?= esc($name) ?>">
            <?php else: ?>
                <span class="hero-initials">
                    <?= esc(strtoupper(substr($name, 0, 1))) ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</header>

<main>

    <section id="about" class="section">
        <h2 class="section-title">Personal Information</h2>

        <!-- default personal info-->
        <dl class="info-grid">
            <?php foreach ($personal as $label => $value): ?>
                <dt><?= esc($label) ?></dt>
                <dd><?= esc($value) ?></dd>
            <?php endforeach; ?>
        </dl>

        <!-- toggle hidden personal info -->
        <button class="btn btn-outline btn-toggle" data-toggle="full-pds">
            View Full Details
        </button>

        <!--  full personal info card-->
        <div id="full-pds" class="full-pds" hidden>
            <dl class="info-grid">
                <?php foreach ($full_personal as $label => $value): ?>
                    <dt><?= esc($label) ?></dt>
                    <dd><?= esc($value) ?></dd>
                <?php endforeach; ?>
            </dl>
        </div>
    </section>

    <section id="education" class="section">
        <h2 class="section-title">Educational Background</h2>
        <div class="timeline">
            <?php foreach ($education as $edu): ?>
                <div class="timeline-item">
                    <span class="timeline-year"><?= esc($edu['year']) ?></span>
                    <h3><?= esc($edu['school']) ?></h3>
                    <p><?= esc($edu['degree']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


<section id="experience" class="section">
    <h2 class="section-title">Work Experience</h2>
    <div class="exp-list">
        <?php foreach ($experience as $job): ?>
            <div class="exp-item">
                <div class="exp-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <div class="exp-body">
                    <h3><?= esc($job['position']) ?></h3>
                    <p class="exp-company"><?= esc($job['company']) ?></p>
                    <span class="exp-date"><?= esc($job['from']) ?> – <?= esc($job['to']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

    <section id="skills" class="section">
        <h2 class="section-title">Skills</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $category => $items): ?>
                <div class="skill-card">
                    <h3><?= esc($category) ?></h3>
                    <div class="skill-tags">
                        <?php foreach ($items as $skill): ?>
                            <span class="tag"><?= esc($skill) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="projects" class="section">
        <h2 class="section-title">Projects</h2>
        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
                <article class="project-card">
                    <h3><?= esc($project['title']) ?></h3>
                    <p><?= esc($project['desc']) ?></p>
                    <a href="<?= esc($project['link']) ?>" target="_blank" rel="noopener" class="project-link">
                        View Project 
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="contact" class="section">
        <h2 class="section-title">Contact</h2>
        <p class="lead">Feel free to reach out — I'm open to opportunities and collaborations.</p>
        <div class="contact-grid">
            <a href="mailto:<?= esc($contact['email']) ?>" class="contact-item">
                <span class="contact-label">Email</span>
                <span class="contact-value"><?= esc($contact['email']) ?></span>
            </a>
            <a href="<?= esc($contact['github']) ?>" target="_blank" rel="noopener" class="contact-item">
                <span class="contact-label">GitHub</span>
                <span class="contact-value"><?= esc($contact['github']) ?></span>
            </a>
            <a href="<?= esc($contact['linkedin']) ?>" target="_blank" rel="noopener" class="contact-item">
                <span class="contact-label">LinkedIn</span>
                <span class="contact-value"><?= esc($contact['linkedin']) ?></span>
            </a>
        </div>
    </section>

</main>

<footer class="footer">
    <p>&copy; <?= date('Y') ?> <?= esc($name) ?> · Built with CodeIgniter <?= \CodeIgniter\CodeIgniter::CI_VERSION ?></p>
</footer>

<script>
document.querySelectorAll('[data-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () {
        var target = document.getElementById(btn.dataset.toggle);
        if (!target) return;
        var isHidden = target.hasAttribute('hidden');
        if (isHidden) {
            target.removeAttribute('hidden');
            btn.textContent = 'Hide Full Details';
        } else {
            target.setAttribute('hidden', '');
            btn.textContent = 'View Full Details';
        }
    });
});
</script>

</body>
</html>