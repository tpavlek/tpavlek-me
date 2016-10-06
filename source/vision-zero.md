---
layout: wrapped
title: Vision Zero
use:
    - posts_tags
---

<h1 style="text-align:center;">{{ page.title }}</h1>

<article class="is-centered post">
    <div class="post-content">
    
        <p>
            <a href="http://www.visionzeroinitiative.com/">Vision Zero</a> is the swedish approach to traffic safety that
            follows a single tenant of traffic safety
        </p>
        
        <blockquote>
            <p>
                No loss of life is acceptable.
            </p>
        </blockquote>
        
        <p>
            This is very important it's the most important it has the best important.
        </p>
        
        <p>
            Let me just say with all my words how important and full of words this is
        </p>
        
        <p>
            wow
        </p>
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis mollis turpis. Integer hendrerit purus vel dictum lobortis. Vestibulum ullamcorper dictum metus, nec imperdiet neque posuere quis. Nam pulvinar ac ligula in accumsan. Donec sit amet urna lorem. Mauris convallis dolor sit amet rutrum pulvinar. Donec nec sagittis turpis. Donec sagittis augue et molestie egestas. Nullam dignissim nec purus sit amet dapibus. Aenean id nisl ante. Maecenas sodales dui sed erat ultricies aliquam. Donec convallis urna quis libero lacinia aliquet. In hac habitasse platea dictumst. Nullam suscipit nisl vitae sem luctus, id tempus lorem feugiat. Phasellus euismod dui a accumsan scelerisque.
        </p>
        
    </div>
</article>


<h1 class="is-centered">What I've written about it:</h1>
<div class="blog-archive">
    {% for tag,posts in data.posts_tags if tag == 'vision-zero' %}
        {% for post in posts %}
            {% include 'archive-post.html.twig' with {"post":post} %}
        {% endfor %}
        
    {% endfor %}
</div>
