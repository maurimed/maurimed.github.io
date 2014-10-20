<?php

View::composer('site.pages.home.partials.ambassadors', 'Epro360\Composers\AmbassadorsComposer');

View::composer('site.pages.home.partials.promos', 'Epro360\Composers\PromosComposer');

View::composer('dashboard.locations.countries.list', 'Epro360\Composers\CountriesComposer');

View::composer('dashboard.locations.countries.select-only', 'Epro360\Composers\CountriesComposer');


//View::composer('dashboard.locations.states.select-only', 'Epro360\Composers\StatesComposer');

