# Utbildningssida med repeterande fält

## Hur man använder Region Hallands plugin "region-halland-acf-page-education-repeater"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-education-repeater".


## Användningsområde

Denna plugin skapar en post_type med namn "utbildningar" med tillhörande fält


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-education-repeater.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-education-repeater.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-education-repeater": "1.0.0"
},
```
## Hämta ut namn + länkade kommun-namn per utbildningsområde via "Blade"

- I exemplet array för området 'vard_omsorg'

```sh
@if(function_exists('get_region_halland_acf_page_education_repeater_items'))
  @php($myItems = get_region_halland_acf_page_education_repeater_items()) 
  @if($myItems['vard_omsorg'])
  <ul>
    <h2 class="pb2 rh-lists-title">Vård- och omsorg</h2>
    @foreach($myItems['vard_omsorg'] as $item)
      <li class="rh-lists-items">
        <p class="rh-lists-items-left">
          {{ $item['page']->education_name }}
        </p>
        @foreach ($item['page']->metadata as $metadata)
          <a href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a><br>
        @endforeach
      </li>
    @endforeach
  </ul>
  @endif
@endif
```


## Alla 11 områden finns tillgängliga i multi-arrayen

- Det finns en  array för alla 11 områderna

```sh
$myMultiPages = array();
$myMultiPages['vard_omsorg'] = $myVardOmsorg;
$myMultiPages['bygg_anlaggning'] = $myByggAnlaggning;
$myMultiPages['el_energi'] = $myElEnergi;
$myMultiPages['fordon_transport'] = $myFordonTransport;
$myMultiPages['industriteknik'] = $myIndustriteknik;
$myMultiPages['barn_fritid'] = $myBarnFritid;
$myMultiPages['restaurang_livsmedel'] = $myRestaurangLivsmedel;
$myMultiPages['handel_administration'] = $myHandelAdministration;
$myMultiPages['naturbruk'] = $myNaturbruk;
$myMultiPages['hantverk'] = $myHantverk;
$myMultiPages['vvs_fastighet'] = $myOvrigt;
$myMultiPages['ovrigt'] = $myOvrigt;
```


## Versionhistorik

### 1.4.0
- Utbildningsområde "VVS och fastighet" tillagt
- Nytt utbildningsområde tillagt på sidan "template-lista-utbildningar.blade.php"

### 1.3.2
- Kontroll om länk finns

### 1.3.1
- Fel antal hämtades ut

### 1.3.0
- Uppdelaningar av utbildningar per utbildningsområde

### 1.2.0
- Funktion för att hämta ut utbildningar

### 1.1.0
- Reviderad version med helt nya fält

### 1.0.0
- Första version