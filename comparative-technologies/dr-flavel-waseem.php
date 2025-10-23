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
    <article class="profile" id="dr">
      <div class="top">
        <img src="researcher.png" alt="Portrait of Dr. Flavel Waseem">
        <div>
          <h2>Dr. Flavel Waseem</h2>
          <div class="subtitle">Senior Research Fellow in Philosophy of Religion</div>
        </div>
      </div>
      <section class="section">
        <h3>Short Bio</h3>
        <p>I am a scholar of philosophy, particularly interested in the modern-day understandings of religion and faith
          in Anglo-Christian societies and their relation to the public and scientific debate.
          At the I Inst. for Comparative Theologies I head the research group “Religion and the Sciences” where we study
          the impact of systematic theology on the current scientific and political discourse.</p>
      </section>
      <section class="section">
        <h3>Research Interests</h3>
        <ul>
          <li>Interreligious dialogue and disagreement</li>
          <li>Epistemology of religious experience</li>
          <li>Ritual, moral formation, and forgiveness</li>
          <li>Hermeneutics and scriptural practices</li>
          <li>Religion, technology, and public life</li>
          <li>Postsecularism and law</li>
        </ul>
      </section>
      <section class="section">
        <h3>Short CV</h3>
        <ul>
          <li>2021–present: Senior Research Fellow, Inst. for Comparative Theologies</li>
          <li>2018–2021: Lecturer in Philosophy of Religion, Catholic LZMS Paris School of Ethics</li>
          <li>2014–2018: Doctoral Researcher, Hegel von Scholz Institute Paris</li>
          <li>2012–2014: Research Assistant, Hegel von Scholz Institute Paris</li>
        </ul>
      </section>
      <section class="section">
        <h3>Affiliations</h3>
        <ul>
          <li>Inst. for Comparative Theologies — Centre for Philosophy of Religion</li>
          <li>Centre for Ritual and Moral Psychology, Brynmere</li>
          <li>Network for Postcolonial Theologies, Austerleigh</li>
        </ul>
      </section>
      <section class="section">
        <h3>Education</h3>
        <ul>
          <li>PhD, Philosophy of Religion, Hegel von Scholz Institute, Paris, KAANT Group, 2018</li>
          <li>MA, Philosophical Theology, Hegel von Scholz Institute Paris, 2014</li>
          <li>BA, Alterna Hochschule Gießen, 2012</li>
        </ul>
      </section>
      <section class="section">
        <h3>Teaching</h3>
        <ul>
          <li>Comparative Philosophy of Religion</li>
          <li>Religion, Ethics, and Public Life</li>
          <li>Hermeneutics and Sacred Texts</li>
          <li>Religion, Technology, and Community</li>
        </ul>
      </section>
      <section class="section">
        <h3>Awards</h3>
        <ul>
          <li>Early Career Prize, Aurora Humanities Council, 2020</li>
          <li>Best Article Award, Comparative Theologies Quarterly, 2022</li>
        </ul>
      </section>
      <section class="section">
        <h3>Publications</h3>
        <ul>
          <li>Flavel Waseem, Plural Normativities: Moral Disagreement in Interreligious Contexts, Comparative Theologies
            Quarterly , 2022.</li>
          <li>Flavel Waseem, Testimony, Trust, and Sacred Texts in Migrant Communities, Journal of Lived Religion
            Studies , 2021.</li>
          <li>Flavel Waseem; A. Idris, Rituals of Forgiveness and Civic Repair, Interfaith Reasoning Review , 2020.</li>
          <li>Flavel Waseem, Digital Piety: Religious Reasoning on Encrypted Platforms, Religion &amp; Public
            Deliberation Monographs , 2023.</li>
          <li>Flavel Waseem, The prophetic literature in the Old Testament and the representation of today’s Israel’s
            settlement politics in Gaza and the West Bank in French online social media - a discourse analysis,
            Philosophy of Religion Annual , 2019.</li>
        </ul>
      </section>
      <section class="section">
        <h3>Abstract</h3>
        <p>Churches across the anglo-christian culture sphere experience decreasing membership numbers, especially in
          the group of young adults. Previous research has shown that one factor contributing to the declining number of
          young adults attending church services is their perception of a missing or misaligned consistency in the
          institution’s representation. In this paper we draw on the theory of systematic theology, which is founded in
          the principle of coherence and strives to deliver a logically consistent representation of the christian
          faith, to explore their perception further. While the general perception has been studied through various
          surveys and longitudinal experiments, it remains underexplored how young adults view the church’s role and
          responsibility (measured through perceived coherence, rationality and solidarity) specifically in political
          discourses which mobilise the majority of their generation. We therefore conducted two surveys (n=562) and two
          rounds of semi structured interviews (n=29) with young adults between 18 and 30 during the Fridays for Future
          protests 2019 and 2024 in Brazil, Italy and Poland. This work summarises the findings and compares the
          perceived coherence, rationality and solidarity of the church over time. We find significant geographical
          differences between Italy and Brazil where Italian young adults displayed a higher perceived coherence but
          lower perceived solidarity. We found the answers of most participant groups to display a correlation between
          perceived rationality and solidarity which leads us to propose future approaches towards young adults be
          rooted more closely in systematic theology.
          ---
          _Source seed_: Priyanka McLeod.odt</p>
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