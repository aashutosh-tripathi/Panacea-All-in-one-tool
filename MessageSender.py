from twilio.rest import Client
def messageSender(accountSID,authToken,numbers,body):

    client = Client(accountSID, authToken)
    for num in numbers:
        message = client.messages.create(body=body,from_="[+][1][9282603816]",to="[+][91]["+num+"]")

#driver code

accountSID =input("Enter the account SID : ")
authToken =input("Enter the auth token : ")
MsgBody=input("Enter the message Body : ")

print("Enter the phone numbers to which you want to send messages\n Enter 0 to exit")
numbers=[]
while(True):
    x=input()
    if x==0:
        break
    numbers.append(x)

messageSender(accountSID,authToken,numbers,MsgBody)
