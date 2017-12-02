@extends('_layouts.wrapped')
@section('title', 'Open City')

@section('content')

    <h1 class="main-heading">Open City</h1>

    <article class="mx-auto bg-white shadow">
        <div class="post-content post-text">
            <p>
                Have you ever wondered <em>why</em> council is making some decision? Have you questioned why photo radar
                is
                deployed in a particular location? Why bike lanes were chosen for downtown, instead of somewhere else?
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'photo-radar-locations-audit' ])

            <p>
                City Council makes informed decisions based on data to shape the future of the City of Edmonton. But how
                can
                you hold them to account if they have more data than you? Without being able to see all the information
                your
                councillor used and being able to come to your own conclusions, the relationship will forever be
                imbalanced
                because feedback you give might be invalidated by certain data, that you could never know about.
            </p>
            <p>
                This is where <strong>open data</strong> comes in. Simply put, Open data is information that the City
                owns, released freely
                in a usable format for anyone to work with, remix, and report on. In April of 2015, Council adopted
                <a href="https://www.edmonton.ca/city_government/documents/C581.pdf">City Policy C581</a> (pdf) which
                states that
                city data should be <em>open by default</em>. This is a great policy decision, but some of the
                implementation
                has left a bit to be desired. We need to put priority on removing all barriers and getting all our old
                and new
                data opened up, as soon as possible. This should also apply to our software, which I argue should be Open Source.
            </p>

            @include('_partials.posts.post-embed', [ 'slug' => 'open-sourcing-edmontons-software' ])

            <p>
                When data is collected part of the process <em>before</em> collection begins should be considering how
                this data
                will be opened up for use by citizens, city staff and journalists; this should <strong>not be just an
                    afterthought</strong>!
                If there exist
                privacy implications, those should be noted causing the data goes into a review/redacting process <em>immediately</em>
                so the parts that can be released, are released quickly.
            </p>
            <p>
                The benefits of this extend further than just increased transparency via sharing data, there are also
                significant cost savings associated
                with this change. In 2016, more than <strong>2/3 of all FOIP requests were routine disclosures</strong>.
                That's
                data that the City "routinely" releases - what if all of these could become self-serve? Not to mention
                inter-departmental
                communication at the City of Edmonton. Instead of requesting other departments build PDFs and
                spreadsheets
                summarizing data, at significant staff expense, data can be found in the open data catalogue in many
                different
                easily usable formats.
            </p>

            <blockquote>
                <p>
                    All work should include a strategy for putting the data generated into the Open Data Catalogue
                </p>
            </blockquote>
            <p>
                In order to enable the public to engage with city processes in a meaningful way, we need our <em>modus
                    operandi</em>
                to shift - we should share <em>all</em> data, immediately. Any release that reflects badly on the city
                will only
                serve as a benchmark to know when we've improved. One cannot improve what one doesn't measure and
                analyze.
            </p>
            <p>
                Let's target a <strong>truly open city</strong>, not just apply an openness band-aid to a closed city.
            </p>
            <p>
                Elect Troy Pavlek to Edmonton City Council in Ward 11.
            </p>

            <a href="/platform" class="button">
                Platform
            </a>

        </div>
    </article>

    <h1 class="main-heading text-3xl my-8">What I've written about it:</h1>

    <div class="blog-archive">
        @foreach($page->tagged($posts, 'open-city') as $post)
            @include('_partials.posts.archive-post', [ 'post' => $post ])
        @endforeach
    </div>

@stop
