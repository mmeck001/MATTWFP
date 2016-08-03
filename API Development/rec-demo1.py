## Recommendation.py will take in a set of 4 numbers representing which illness the person has

import re #regular expression library - powerful tool for processing text

import sys
survey = sys.argv
#print str(survey)



disease = ''

#print(survey[1])

if survey[1] == '1':
	disease = 'PTSD'
	data = open('ptsd.txt')
else: 
	if survey[2] == '1':
		disease = 'Depression'
		data = open('depression.txt')
	else:
		disease = 'Anxiety'
		data = open('anxiety.txt')

#print(disease)
#print(data.read())

plaintext = data.read()
rev1 = re.sub('\r\n\r\n', 'AAAA', plaintext) #everytime we find two line endings replace with AAAA
rev2 = re.sub('\r\n', '', rev1) #find each new line - join into one long string - replace single line endings with nothing
rev3 = re.sub('AAAA', '\n\n', rev2) #remove AAAA's, turn back into paragraphs
#p = re.compile('\n\n') #nice spaces between paragraphs
paragraphs = re.split(r'\n\n', rev3) #

if survey[1] == '1':
	print(paragraphs[8])
else:
	print(paragraphs[2])
#print(len(paragraphs))





"""
print(paragraphs[507])

i = 0

#for paragraph in paragraphs:
 # if 'anger' in paragraph:
  #  print str(i) + '. ' + paragraph + '\n\n'
  #i = i + 1
"""

"""
payload = paragraphs[2]

import requests #tools we need to send request to website
import json #read a json string

key = 'f8dc8fe52302952697d373965e660dd5f410ab2f'

data = 'apikey=' + key + '&outputMode=json&text=' + payload #sending a post request to the website and at end of request appending the key value paired

response = requests.post('https://gateway-a.watsonplatform.net/calls/text/TextGetRankedKeywords', data=data)

print response.text
print response.json
json_data = json.loads(response.text)
print json_data['keywords'][0]['text']

dictionary = list()
dictionary.append(0)
"""