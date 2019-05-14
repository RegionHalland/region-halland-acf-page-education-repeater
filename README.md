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

## Hämta ut namn + länkade kommun-namn via "Blade"


```sh
@if(function_exists('get_region_halland_acf_page_education_repeater_items'))
  @php($myData = get_region_halland_acf_page_education_repeater_items())	
  @if(isset($myData))
    @foreach ($myData as $data)
      {{ $data->post_title }}<br>
      @foreach ($data->metadata as $metadata)
        <a href="{{ $metadata['link_url'] }}">{{ $metadata['kommun_name'] }}</a><br>
      @endforeach
    @endforeach
  @endif
@endif
```


## Versionhistorik

### 1.2.0
- Funktion för att hämta ut utbildningar

### 1.1.0
- Reviderad version med helt nya fält

### 1.0.0
- Första version