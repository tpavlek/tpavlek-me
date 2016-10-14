---
layout: wrapped
title: Open City
use:
    - posts_tags
---

<h1 style="text-align:center;">{{ page.title }}</h1>

<article class="is-centered post">
    <div class="post-content">
        <p>
            Have you ever wondered <em>why</em> council is making some decision? Have you questioned why photo radar is
            deployed in a particular location? Why bike lanes were chosen for downtown, instead of somewhere else?
        </p>
        <p>
            City Council makes informed decisions based on data to shape the future of the City of Edmonton. But how can
            you hold them to account if they have more data than you? Without being able to see all the information your
            councillor used and being able to come to your own conclusions, the relationship will forever be imbalanced
            because feedback you give might be invalidated by certain data, that you could never know about.
        </p>
        <p>
            This is where <strong>open data</strong> comes in. Simply put, Open data is information that the City owns, released freely
            in a usable format for anyone to work with, remix, and report on. Currently, our city's data is "closed-first".
            That means when the City collects a certain piece of data, it is by default secret and the open data team has to
            work to make the data become available. This means that by the time data is opened up, it can often become much
            less relevant - important decisions have already passed. The closed-first mindset also applies to our software
            which <a href="/blog/2016/08/10/open-sourcing-edmontons-software">I argue should be Open Source</a>.
        </p>
        <p>
            Let's flip this on its head! Let's make the City of Edmonton "open-first". When data is collected, it is planned
            to go immediately into the open data catalogue for usage by citizens, city staff and journalists. If there are
            privacy implications, those are noted and the data goes into a review/redacting process <em>immediately</em>
            so the parts that can be released, are released quickly.
        </p>
        <p>
            Short of just sharing data and making the city more transparent, there are also significant cost savings associated
            with this change. In 2016, more than <strong>2/3 of all FOIP requests were routine disclosures</strong>. That's
            data that the City "routinely" releases - what if all of these could become self-serve? Not to mention inter-departmental
            communication at the City of Edmonton. Instead of requesting other departments build PDFs and spreadsheets
            summarizing data, at significant staff expense, data can be found in the open data catalogue in many different
            easily usable format.
        </p>
        <p>
            How can we expect the public to engage in a meaningful way with city processes when our <em>modus operandi</em>
            is to keep data secret from that very same public.
        </p>
        <p>
            Let's target a <strong>truly open city</strong>, not just apply an openness band-aid to a closed city.
        </p>
        <p>
            Elect Troy Pavlek to Edmonton City Council in Ward 11.
        </p>
        
    </div>
</article>


<h1 class="is-centered">What I've written about it:</h1>
<div class="blog-archive">
    {% for tag,posts in data.posts_tags if tag == 'open-city' %}
        {% for post in posts %}
            {% include 'archive-post.html.twig' with {"post":post} %}
        {% endfor %}
        
    {% endfor %}
</div>
