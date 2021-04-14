import requests
import json
import base64


def get_token():  
    API_KEY= "ulvvz2qfpqbdneozlbdz2nyszo59xwgs"
    SECRET= "jUOu5a8YWCv6"
    message = API_KEY + ":" + SECRET
    auth = "Basic " + base64.b64encode(message.encode("ascii")).decode("ascii")

    headers_dic = {"Authorization" : auth,
                   "Content-Type" : "application/x-www-form-urlencoded;charset=UTF-8"}

    params_dic = {"grant_type" : "client_credentials",
                  "scope" : "read"}

    r = requests.post("https://api.idealista.com/oauth/token",
                      headers = headers_dic,
                      params = params_dic)

    bearer_token = json.loads(r.text)['access_token']

    return bearer_token #Token para acceder API


def get_search():

        result = []
        token = get_token()

        headers_dic = {"Authorization" : "Bearer " + token,
                        "Content-Type" : "application/x-www-form-urlencoded"}

        for i in range(4):
            params_dic = {"operation" : "rent", #Parametros para extraer los datos que nos interesa
                          "center" : "40.402,-3.715",
                          "distance" : "50000",
                          "propertyType" : "homes",
                          "sort" : "desc",
                          "numPage" : i
                        }
            r = requests.post("https://api.idealista.com/3.5/es/search",
                      headers = headers_dic,
                      params = params_dic)

            result_json = json.loads(r.text)
            result.append(result_json)

        return result


with open('resultado.json', 'w') as fichero:
    jsn = get_search()
    json.dump(jsn, fichero)