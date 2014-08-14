<div class="container">
    <div class="row">
        <div class="col-sm-12 main-el">
            <div class="row">
                <div class="col-sm-12 main-el">
                    <div class="ambassadors-background">
                        @foreach ($ambassadors as $ambassador)
                            {{ get_profile_image_for_background($ambassador->profile, 'sm') }}
                        @endforeach
                        @for ($i = $ambassadors->count(); $i < 45; $i++)
                            <img class="img-responsive pull-left" src="/admin/images/profiles/default.jpg" />
                        @endfor

                    </div>
                </div>
            </div>
            <div class="callout">
                <div class="row">
                    <p class="col-sm-6">Is your country not on this list?</p>
                    <div class="col-sm-6">
                        <a href="#"><div class="button solid md blue pull-right"><div class="over">Contact our online Ambassador</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
