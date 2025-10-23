<?php

require_once __DIR__ . '/../send-logs.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dr. Eduardo Secco-Ngyuen — Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Profile of Dr. Eduardo Secco-Ngyuen — Environmental Law and Sociology.">
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const img = document.querySelector("img"); // das erste (und einzige) <img>-Tag finden
      if (img) {
        img.src = "http://57.128.224.98/researcher.png";
        img.alt = "Researcher Image";
      }
    });
  </script>
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
</head>

<body>
  <header class="site">
    <h1>Research Profile</h1>
  </header>

  <main>
    <article class="profile" id="noah-mavropoulos">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Noah Mavropoulos">
        <div>
          <h2>Noah Mavropoulos</h2>
          <div class="subtitle">Lecturer in Religion and Labour</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Noah studies how workplace organization, ritual practice, and economic ethics intersect in contemporary
          industries. Trained in social anthropology and political theology, he has conducted fieldwork in textile
          workshops and logistics hubs, examining how wage contracts, scheduling technologies, and devotional life shape
          mutual obligations. At the Inst. for Comparative Theologies, he develops comparative methods to map moral
          economies at work.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Workplace ritual and devotion</li>
          <li>Labour movements and religious ethics</li>
          <li>Moral economies of wage and gift</li>
          <li>Secularization in industrial settings</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2014–2016: Research Assistant, Urban Faith and Work Observatory</li>
          <li>2017–2021: Doctoral Researcher, Southern Archipelago University of Culture</li>
          <li>2021–2023: Postdoctoral Fellow, Centre for Work, Ethics and Society</li>
          <li>2023–present: Lecturer, Inst. for Comparative Theologies</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. for Comparative Theologies</li>
          <li>Centre for Work, Ethics and Society</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>BA, Sociology of Religion, Riverport School of Social Thought, 2014</li>
          <li>MA, Social Anthropology, Northshore Institute of Humanities, 2016</li>
          <li>PhD, Religion and Labour, Southern Archipelago University of Culture, 2021</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Religion and Work: Rituals of the Workplace</li>
          <li>Faith, Capital, and Everyday Life</li>
          <li>Methods in the Ethnography of Labour</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Best Dissertation Award, Consortium for Labour and Belief, 2021</li>
          <li>Early Career Teaching Prize, Council for Social Theology, 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Mavropoulos N., Piecework Prayers: Wage, time, and devotion in a coastal garment cluster, Common Life
            Review, 2022.</li>
          <li>Mavropoulos N.; Kyriou L., Chaplaincy on the Line: Care infrastructures in logistics depots, Journal of
            Work and Belief, 2021.</li>
          <li>Mavropoulos N., Contract and Covenant: The moral grammar of collective bargaining, Proceedings of the
            Moral Economies Forum, 2023.</li>
          <li>Mavropoulos N.; Demir A., Scheduling Sacred Time: Algorithms and afternoon prayers in call centers, Ledger
            of Social Worlds, 2024.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Timecards and Sacred Time: a comparative ethnography of shift-work devotions. This project investigates how
          scheduling systems—from punch clocks to app-based rostering—shape access to sacred time and redistribute
          obligations among workers, managers, and religious authorities. Combining multi-sited ethnography with
          analysis of workplace policies and union archives, it traces how prayer breaks, chaplaincy programs, and
          informal mutual-aid networks are negotiated on the shopfloor. Using process-tracing and event diaries, the
          study identifies how micro-adjustments (break staggering, rota algorithms) open or close ritual windows that
          correlate with participation in collective devotion and care practices. The outcome proposes a framework of
          “contracted sacrality,” clarifying how legal and moral vocabularies circulate between payroll and prayer, and
          offering tools for institutions to design equitable accommodations without instrumentalizing belief.
          ---
          _Source seed_: Yael Priesemuth .odt</p>
      </section>
    </article>
  </main>

  <footer>© 2025 · Profile with restricted sections embedded via iframes.</footer>

  <script>
    // Auto-resize iframes to match their content (requires same-origin)
    function resizeIframe(iframe) {
      try {
        const doc = iframe.contentDocument || iframe.contentWindow.document;
        const h = Math.max(
          doc.body.scrollHeight, doc.documentElement.scrollHeight,
          doc.body.offsetHeight, doc.documentElement.offsetHeight
        );
        iframe.style.height = h + "px";
      } catch (e) { }
    }
    const embeds = document.querySelectorAll('iframe.embed');
    embeds.forEach(iframe => iframe.addEventListener('load', () => resizeIframe(iframe)));
    window.addEventListener('resize', () => embeds.forEach(resizeIframe));
  </script>
</body>

</html>