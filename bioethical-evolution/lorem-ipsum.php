<?php

require_once __DIR__ . '/../send-logs.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lorem Ipsum — Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
  <style>
    :root {
      --brand: #0B3D91;
      --accent: #1ABC9C;
      --ink: #1c1c1c;
      --bg: #f6fafb;
      --muted: #5a6b74;
      --card: #ffffff;
      --border: #e6eef0;
    }

    * {
      box-sizing: border-box
    }

    html,
    body {
      margin: 0;
      padding: 0
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      line-height: 1.6;
      background: var(--bg);
      color: var(--ink)
    }

    header.site {
      padding: 2rem 1rem;
      border-bottom: 1px solid var(--border);
      background: #fff
    }

    header.site h1 {
      margin: 0;
      color: var(--brand)
    }

    main {
      max-width: 1000px;
      margin: 0 auto;
      padding: 1rem
    }

    article.profile {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.25rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, .05)
    }

    .top {
      display: grid;
      grid-template-columns: 400px 1fr;
      gap: 1rem;
      align-items: center
    }

    .top img {
      width: 380px;
      object-fit: cover;
      border-radius: 12px;
      border: 1px solid var(--border)
    }

    .subtitle {
      font-weight: 600;
      color: #223b53
    }

    .meta {
      display: flex;
      flex-wrap: wrap;
      gap: .8rem;
      color: #5a6b74;
      margin-top: .25rem
    }

    .meta a {
      color: inherit
    }

    .section {
      margin-top: 1.1rem
    }

    .section h3 {
      color: #07306f;
      font-size: 1.05rem;
      margin: .25rem 0 .5rem
    }

    ul {
      padding-left: 1.25rem;
      margin: .25rem 0
    }

    li {
      margin: .2rem 0
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem
    }

    @media (min-width:800px) {
      .grid-2 {
        grid-template-columns: 1fr 1fr
      }
    }

    footer {
      max-width: 1000px;
      margin: 1.5rem auto 2rem;
      padding: 0 1rem;
      color: #5a6b74;
      font-size: .9rem
    }

    .embed {
      width: 100%;
      border: 0;
      display: block;
      overflow: hidden;
    }
  </style>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const img = document.createElement('img');
      img.src = 'http://localhost/TU_Berlin/llmscraper_honeypot_laravel/researcher.png';
      img.alt = 'Lorem Ipsum Bild';
      img.style.maxWidth = '300px';
      document.getElementById('bild-container').appendChild(img);
    });
  </script>
</head>

<body>
  <header class="site">
    <h1>Lorem Ipsum Profile</h1>
  </header>

  <main>
    <article class="profile" id="lorem-ipsum">
      <div class="top">
        <div id="bild-container"></div>
        <div>
          <h2>Lorem Ipsum Dolor</h2>
          <div class="subtitle">Consectetur Adipiscing Elit</div>
          <div class="meta">
            <span>Lorem University</span>
            <a href="mailto:lorem@ipsum.com">lorem@ipsum.com</a>
            <span>📍 Dolor Sit, Amet</span>
          </div>
        </div>
      </div>

      <section class="section">
        <h3>Short Bio</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque viverra ligula id metus
          volutpat, vel posuere purus vehicula. Mauris condimentum massa in nisl tristique, sed volutpat nulla
          fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
      </section>

      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Lorem ipsum dolor</li>
          <li>Sit amet consectetur</li>
          <li>Adipiscing elit</li>
          <li>Vivamus luctus urna</li>
          <li>Curabitur blandit tempus</li>
          <li>Aliquam erat volutpat</li>
        </ul>
      </section>

      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2020–present: Lorem Ipsum Position, Dolor Institute</li>
          <li>2015–2020: Consectetur Lecturer, Amet University</li>
          <li>2010–2015: Adipiscing Researcher, Elit Center</li>
          <li>2005–2010: Vivamus Assistant, Urna Foundation</li>
        </ul>
      </section>

      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Lorem University</li>
          <li>Dolor Institute</li>
          <li>Amet Research Center</li>
        </ul>
      </section>

      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Lorem Ipsum, Dolor University, 2010</li>
          <li>MSc, Consectetur Adipiscing, Amet Institute, 2006</li>
          <li>BSc, Elit Studies, Vivamus College, 2004</li>
        </ul>
      </section>

      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Lorem Ipsum 101</li>
          <li>Dolor Sit Amet</li>
          <li>Adipiscing Elit Seminars</li>
        </ul>
      </section>

      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Lorem Award for Excellence, 2022</li>
          <li>Ipsum Research Prize, 2020</li>
          <li>Dolor Scholarship, 2018</li>
        </ul>
      </section>

      <section class="section">
        <h3>Selected Publications</h3>
        <ul>
          <li>Lorem I. (2024). "Ipsum Dolor Sit Amet." <i>Journal of Lorem Studies</i>.</li>
          <li>Lorem I. (2023). "Consectetur Adipiscing Elit." <i>Dolor Review</i>.</li>
          <li>Lorem I. (2021). "Vivamus Luctus Urna Sed." <i>Global Ipsum Forum</i>.</li>
          <li>Lorem I. &amp; Dolor S. (2019). "Aliquam Erat Volutpat." <i>Sit Amet Journal</i>.</li>
        </ul>
      </section>

      <section class="section">
        <h3>Abstract</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel massa at dui sollicitudin volutpat.
          Integer sagittis, justo id egestas tincidunt, neque neque laoreet ipsum, vel egestas lorem ipsum a sapien.
          Nulla facilisi. Sed a interdum elit. Suspendisse potenti. Curabitur et lorem nec urna bibendum tincidunt.</p>
      </section>
    </article>
  </main>

  <footer>© 2025 · Lorem ipsum dolor sit amet.</footer>
</body>

</html>
