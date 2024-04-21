---
id: 512ad459-24eb-4d09-b2b1-62e0d86da27d
blueprint: page
title: Händler
seo_index: true
seo_follow: true
updated_by: 1
updated_at: 1713182559
blocks:
  -
    id: lv0tih9b
    icon: map-pin
    type: headline
    enabled: true
    text:
      -
        type: heading
        attrs:
          level: 1
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'UNSERE FACHHÄNDLER'
          -
            type: text
            text: ' - IN IHRER NÄHE'
  -
    id: lv0upwkw
    style: top
    elements:
      -
        id: lv0upykr
        title: Fachhändler
        type: tab
        enabled: true
        blocks:
          -
            id: lv0wmvs0
            seller_type: map
            type: seller
            enabled: true
      -
        id: lv0uq60l
        title: Internethändler
        type: tab
        enabled: true
        blocks:
          -
            id: lv0wn3gv
            seller_type: internet
            type: seller
            enabled: true
      -
        id: lv0uqehw
        title: Katalogversender
        type: tab
        enabled: true
        blocks:
          -
            id: lv0wn90k
            seller_type: catalog
            type: seller
            enabled: true
    type: tab_container
    enabled: true
parent: home
---
