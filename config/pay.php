<?php

return [
    'alipay' => [
        'app_id'         => '2016091900543987',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuXwEnR/QlQX33f/kpMDgrH7bxcKH0Zpoi7l4fUZ1t79u1hyP1K7WBckDJ1RUqYkKpMH6QaiU9MrBazv2Pv7fXejhsKWVmjYisW0tUIYWk9kpGU2nTcL6gaVzYlAq6AUYVv3+7gUn/d72RN+ha/5elonl1gKjl91p5A9Lxh+JVFcfM08YPtyBMehOZQGhAhA0EKD8DX5iQ6xNC+ihhwh7kEh87O5oxQEWBIURHTN0cATeje0dwn1RsyQGEdoj4vIjiLRO2da4EbrUzK0GynjvtPSLb4zw/+EOD6Iuo1MIEBeN2aCRzFDvMOaRiRAiNKgYfPExnbQ1587vow3EYc48FQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA83H9+0Lp2r339T0iWIaz+VS7NP7XTv5BOHwCa/7gK4j2Zn9x3LUodSlqlEzs/69PYJ+0OyHntR+pXg4It7D8ciYAXKEe7dvBu2TmmRuGUrEQuarfHwO5UcVyDwaSyGKVPgW5APvB3EhvuDoqIZGTBya3rG66N2gdIwqT8VxKWBldrpi8hoYNQ+euaqWSo7rWe8QCigqNmL7pkGgm8+cUO4+ekhflRTHYKREAXo/5iIT2EvGoNosdsiX9du15lQ6l5EAiQw+nlfC6yozFejvoft3Dc56bFDDTNpx3+mrT9AhA47/bTyOJZYAFetao+2kD5ZtoBoAAecHuKBmgasLEXwIDAQABAoIBAQCFFmh3GFmoT/pig41nQBzbzcqaakdi0/Tr4D+isq/ynOm3lyy0MAVyJ7YwZO2bykdm12g8e4ikqC57UMjLQ2J/NO81tI+oEV+UBtFaGoYQZuRx3EwmNG73mS2FsV5FVj+orJA7TWbp+l+5I3Ms7tymKDB5f/8lkzF6mqnOZVnvVr29N03YWCln4rbpWQ0jmkgEx+FRd0YVD7FaZe2KYbxBTDLS/H38wbueeKZA21YR1nif5Xi4sIZTsz0dTG9EjG2wwQhn5iZbUzMfSBXJSSZEN6lJ00RufXi/SnJBxu4TOPNcK6BshZ8M3uFf6sWMgEqwJTglV5Q5T7cmAwKskYshAoGBAPuss51Glj76E2xXCES4snN9+Avk7BiRmFXriWA2qZxEjrI0uGcs+oEpSUnp2+wdxMr9MyzTQ2Y2uq5+6R3UzzNmBHoX9M7+5hNpgK2qg6FUMJqokWKJTjoQL5UOEmk/w1R8n8TOcC1gPVcgZULV9S6SCm3OiqpAXL0KvLko9Ve1AoGBAPehFW5ACWbhyx7r6m08+ocRO4dXSedK2K0fktZI+lAhPjqKIsBALKXaR6onwH4pH/RHOzvO6ENibZ4iZD5c2GWQ59IPvA4rORSZElg5IlhkKueszxkl5RcZ4lCO7ydwDaht4LDlbxxwSFL1uPSSE2DTwLSiVrrLW98Eigcgu5BDAoGBAPZl7/gEGqcPqSKB1vuJJFVEOCxU9P1c1hsQng/PlKEE0fwQ95U0CRGZfUJbLlBuGLRvzsGNGMiivoSGhe8J4c49jBaJC8n47wKEYVIlxfeV+HwCm0wwh6D7Jcq12zqmDbPSy40gW91hAs0hT2JvHTt6CbHV7BahKup976UMP5+dAoGAcOtet2iyIN0j39TakLe20nK0P5I5XCRQTBnSvq6GnpWaJ92n3R0mfvbbqSb5a05biOwWgb5nQZsXu32ZUqrJ7v62B58vNRLWs6Ldr6dWFxKOUhkGU0RphDBEeFHFkqlRQRXh2Si2kzRMdrAgiD44YfYNsRE6FXH4Ueli+78caLsCgYEA1I6A9ZdJxZY6WRl78HKuRz+esU3wLnERelPb9AeOTsoK5JVzq2uHEeeB0mdo0PdgnR+sz1hsWVI1vFd+wwEEFL0I+eJW1j6MYXNtvzQrM75hkLK65TW5KPnMay2BQj8jt84zXJ7QNW1eeKfCifHFKnet9ab1xa6yQOh6f1bZ27A=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];