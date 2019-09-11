import smtplib, openpyxl

def mailsender(eid,pwd,path,namecol,mailcol,param):

    with smtplib.SMTP('smtp.gmail.com',587) as smtp:
        smtp.ehlo()
        smtp.starttls()
        smtp.ehlo()
        smtp.login(eid,pwd)

        wb=openpyxl.load_workbook(path)
        sheet=wb.get_sheet_by_name('Sheet1')
        lastCol=sheet.get_highest_column()
        latestMonth= sheet.cell(row=1,column=lastCol).value


        unpaidMembers={}
        for r in range(2,sheet.get_highest_row()+1):
            payment=sheet.cell(row=r,sol=lastCol).value
            if payment != param:
                name=sheet.cell(row=r,column=int(namecol)).value
                email = sheet.cell(row=r,column=int(mailcol)).value
                unpaidMembers[name]=email


        for name,email in unpaidMembers.items():
            body = "Subject: %s dues unpaid.\nDear %s,\nRecords show that you have not paid dues for % s.Please make this payment as soon as possible.Thank you!'" %(latestMonth, name, latestMonth)
            print('Sending email to %s...' % email)
            sendmailStatus = smtp.sendmail('my_email_address@gmail.com', email, body)
            if sendmailStatus != {}:
                print('There was a problem sending email to %s: %s' % (email, sendmailStatus))

        smtp.close()


#driver code
print("Welcome to automatic Email Sender...")
eid=input("Please Enter the sender's email id : ")
pwd=input("Please enter the app password : ")

print("Please Enteer excel related information : ")
path=input("Enter the excel file path or name : ")
col=int(input("Enter the column index : "))
param=input("What's the parameter ? ")
namecol=input("Enter col number of name : ")
mailcol=input("Enter mail column :")

mailsender(eid,pwd,path,namecol,mailcol,param)
