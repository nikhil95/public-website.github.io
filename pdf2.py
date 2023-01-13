from fpdf import FPDF
import plotly.express as px
#Laypout ('P','L') 
class PDF(FPDF):
    def header(self):
        #x,y,width
        self.image('rezlytix logo-01.png',10,8,25)
        self.set_font('helvetica','B',20)
        #Title
        self.cell(80)
        self.cell(30,10,'Title',border=True,ln=True,align='C')
        self.ln(20)

    def footer(self):
        #set position of the footer
        self.set_y(-15)
        #set font
        self.set_font('helvetica','I',10)
        self.cell(0,10,str(self.page_no()),align='C')
        




pdf = PDF('P','mm','Letter')

#get total page no
pdf.alias_nb_pages()

pdf.set_auto_page_break(auto=True,margin=15)
#Add a page
pdf.add_page()
#specify font
pdf.set_font('helvetica','BIU',16)

for i in range(1,41):
    #pdf.cell(0,10,'this is line'+str(i), ln=True)
    fig = px.scatter(x=[0, 1, 2, 3, 4], y=[0, 1, 4, 9, 16])
    fig.write_image('fig1.png')
    pdf.image('fig1.png')



pdf.output('pdf2.pdf')