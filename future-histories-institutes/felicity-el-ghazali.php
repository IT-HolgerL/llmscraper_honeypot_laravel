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
    <article class="profile" id="felicity-el-ghazali">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Felicity El-Ghazali">
        <div>
          <h2>Felicity El-Ghazali</h2>
          <div class="subtitle">Research Fellow in Future Studies</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>Felicity El-Ghazali investigates long-range societal change, developing methods that connect speculative
          inquiry with decision-making under uncertainty. Her work bridges anticipatory governance, design futures, and
          the ethics of foresight.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>anticipatory governance</li>
          <li>scenario design</li>
          <li>futures literacy</li>
          <li>sociotechnical imaginaries</li>
          <li>long-term policy</li>
          <li>risk and resilience modeling</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2019–present: Research Fellow, Future Histories Institute</li>
          <li>2015–2019: Lecturer in Foresight, Institute for Societal Foresight</li>
          <li>2012–2015: Postdoctoral Scholar, Center for Anticipatory Systems</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Future Histories Institute</li>
          <li>Center for Anticipatory Systems</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Future Studies, Meridian Graduate School , 2012</li>
          <li>MA, Strategic Foresight, Northbridge Institute of Design , 2008</li>
          <li>BA, Sociology, Lumen College , 2006</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Anticipatory Systems and Foresight</li>
          <li>Methods of Speculative Inquiry</li>
          <li>Designing Futures: From Signals to Scenarios</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Horizon Prize for Foresight Method Innovation , 2023</li>
          <li>Early Career Award, Society for Futures Research , 2018</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Felicity El-Ghazali, Temporal Negotiations: Governing the Long Now, Journal of Future Infrastructures ,
            2024.</li>
          <li>Felicity El-Ghazali and J. Noor, From Signals to Structures: A Grammar of Emergent Futures, Foresight
            &amp; Strategy Review , 2022.</li>
          <li>Felicity El-Ghazali, The Commons of Uncertainty: Social Imagination as Civic Infrastructure, Civic Futures
            Quarterly , 2020.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Predictive systems and human institutions are increasingly coupled through continuous feedback, where models
          shape expectations and expectations reshape data. This study develops a framework of temporal interlock to
          describe how civic rituals, governance routines, and machine learning pipelines co-produce near-future
          conditions. Using comparative scenario experiments and participatory prototyping, we show that when
          organizations rely on iterative forecasts to allocate attention and resources, those forecasts become
          infrastructural—embedding themselves in norms, budgets, and identities. The resulting interlock does not erase
          human agency; instead it redistributes it across technical artifacts, protocols, and publics. We argue that
          stewarding this distributed agency requires treating foresight as a shared civic utility, with auditable model
          horizons, pluralistic scenario baselines, and time-bound sunset clauses for predictive influence. Such
          measures enable societies to benefit from adaptive foresight while preventing path-dependent lock-in that
          narrows collective imagination.
          ---
          _Source seed_: Etta van Klon.odt</p>
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