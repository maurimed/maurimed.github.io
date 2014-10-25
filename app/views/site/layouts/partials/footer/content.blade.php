<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6  col-md-4  about main-el">
                <div class="sep-heading-container shc4 clearfix dark">
                    <h4>{{ Lang::get('footer.about.title') }}</h4>
                    <div class="sep-container">
                        <div class="the-sep"></div>
                    </div>
                </div>
                <div class="logo-dark">
                    <img class="img-responsive center-block" alt="Epro 360" src="/site/images/logo.png">
                </div>
                <p>{{ Lang::get('footer.about.content') }} </p>
            </div>
            <div class="col-sm-6 col-md-4 main-el">
                <div class="sep-heading-container shc4 clearfix dark">
                    <h4> {{ Lang::get('footer.interest_links') }} </h4>
                    <div class="sep-container">
                        <div class="the-sep"></div>
                    </div>
                </div>
                <div class="list-group">
                {{ link_to_route('faq', Lang::get('faq.title'),[], ['class' => 'list-group-item']) }}
                {{ link_to_route('policy', Lang::get('policy.title'),[], ['class' => 'list-group-item']) }}
                {{ link_to_route('terms', Lang::get('terms.title'),[], ['class' => 'list-group-item']) }}
                {{ link_to_route('backgrounder', Lang::get('backgrounder.title'),[], ['class' => 'list-group-item']) }}

                </div>
            </div>
          

        </div>
    </div>
</div>