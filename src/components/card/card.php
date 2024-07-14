{{!-- This is a partial file used to generate a post "card"
which templates loop over to generate a list of posts. --}}

<article class="component-card {{post_class}}{{#match @custom.feed_layout "Classic"}}{{#is "home"}}{{#has index="0"}} component-card-large{{/has}}{{#has index="1,2"}} dynamic{{/has}}{{/is}}{{/match}}{{#match @custom.feed_layout "Grid"}} keep-ratio{{/match}}{{#match @custom.feed_layout "List"}}{{^is "tag, author"}} component-card-large{{/is}}{{/match}}{{#unless access}} post-access-{{visibility}}{{/unless}}">

    {{#if feature_image}}
    <a class="component-card-image-link" href="{{url}}">

        {{!-- This is a responsive image, it loads different sizes depending on device
        https://medium.freecodecamp.org/a-guide-to-responsive-images-with-ready-to-use-templates-c400bd65c433 --}}
        <img class="component-card-image"
            srcset="{{img_url feature_image size="s"}} 300w,
                    {{img_url feature_image size="m"}} 600w,
                    {{img_url feature_image size="l"}} 1000w,
                    {{img_url feature_image size="xl"}} 2000w"
            sizes="(max-width: 1000px) 400px, 800px"
            src="{{img_url feature_image size="m"}}"
            alt="{{#if feature_image_alt}}{{feature_image_alt}}{{else}}{{title}}{{/if}}"
            loading="lazy"
        />

        {{#unless access}}
        {{^has visibility="public"}}
            <div class="component-card-access">
                {{> "icons/lock"}}
                {{#has visibility="members"}}
                    Members only
                {{else}}
                    Paid-members only
                {{/has}}
            </div>
        {{/has}}
        {{/unless}}

    </a>
    {{/if}}

    <div class="component-card-content">

        <a class="component-card-content-link" href="{{url}}">
            <header class="component-card-header">
                <div class="component-card-tags">
                    {{#primary_tag}}
                        <span class="component-card-primary-tag">{{name}}</span>
                    {{/primary_tag}}
                    {{#if featured}}
                        <span class="component-card-featured">{{> "icons/fire"}} Featured</span>
                    {{/if}}
                </div>
                <h2 class="component-card-title">
                    {{#unless access}}
                    {{^has visibility="public"}}
                        {{#unless feature_image}}
                            {{> "icons/lock"}}
                        {{/unless}}
                    {{/has}}
                    {{/unless}}
                    {{title}}
                </h2>
            </header>
            {{#if excerpt}}
                <div class="component-card-excerpt">{{excerpt}}</div>
            {{/if}}
        </a>

        <footer class="component-card-meta">
            <time class="component-card-meta-date" datetime="{{date format="YYYY-MM-DD"}}">{{date}}</time>
            {{#if reading_time}}
                <span class="component-card-meta-length">{{reading_time}}</span>
            {{/if}}
            {{#if @site.comments_enabled}}
                {{comment_count}}
            {{/if}}
        </footer>

    </div>

</article>
