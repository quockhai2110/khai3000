import json

datathing = {
  "customers": [
    {
      "id": 4545093730501,
      "email": 0,
      "accepts_marketing": 0,
      "created_at": "2020-12-31T09:26:01+07:00",
      "updated_at": "2020-12-31T09:26:01+07:00",
      "first_name": "quang",
      "last_name": "nguyen",
      "orders_count": 0,
      "state": "disabled",
      "total_spent": "0.00",
      "last_order_id": 0,
      "note": "retert",
      "verified_email": 0,
      "multipass_identifier": 0,
      "tax_exempt": 0,
      "phone": "+84322146546",
      "tags": "retert",
      "last_order_name": 0,
      "currency": "VND",
      "addresses": [
        {
          "id": 5552931406021,
          "customer_id": 4545093730501,
          "first_name": "khai",
          "last_name": "nguyen",
          "company": "ert",
          "address1": "retert",
          "address2": "",
          "city": "ha noi",
          "province": "",
          "country": "Vietnam",
          "zip": "123123123",
          "phone": "+84979234835",
          "name": "khai nguyen",
          "province_code": 0,
          "country_code": "VN",
          "country_name": "Vietnam",
          "default": 0
        }
      ],
      "accepts_marketing_updated_at": "2020-12-31T09:26:01+07:00",
      "marketing_opt_in_level": 0,
      "tax_exemptions": [],
      "admin_graphql_api_id": "gid://shopify/Customer/4545093730501",
      "default_address": {
        "id": 5552931406021,
        "customer_id": 4545093730501,
        "first_name": "khai",
        "last_name": "nguyen",
        "company": "ert",
        "address1": "retert",
        "address2": "",
        "city": "ha noi",
        "province": "",
        "country": "Vietnam",
        "zip": "123123123",
        "phone": "+84979234835",
        "name": "khai nguyen",
        "province_code": 0,
        "country_code": "VN",
        "country_name": "Vietnam",
        "default": 0
      }
    }]
}


a = json.loads(str(datathing))
print(a)