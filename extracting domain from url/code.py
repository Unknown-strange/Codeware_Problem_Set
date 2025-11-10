def domain_name(url):
    result = url
    if "//" in result :
        result =  url.split('//',1)[1]
    
    if ('www.' in result):
        result = result.split('www.',1)[1]
    
    if ("." in result):
        return result.split(".",1)[0]
        
    
    
