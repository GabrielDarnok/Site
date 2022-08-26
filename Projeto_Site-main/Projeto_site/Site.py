import pyodbc
from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def usuarios() :
    return render_template("login.php")

@app.route("/homepage")
def evolunet() :
    return render_template("evolunet.php")

@app.route("/roteadores/novos")
def roteadores() :
    return render_template("roteadores.php")

@app.route("/roteadores/retirada")
def retirada() :
    return render_template("retirada.php")

@app.route("/roteadores/testes")
def testes () :
    return render_template("testes.php")

@app.route("/onu/novos")
def onu() :
    return render_template("onu.php")

@app.route("/onu/retirada")
def onu_ret() :
    return render_template("onu_ret.php")

@app.route("/onu/testes")
def onu_test() :
    return render_template("onu_test.php")

@app.route("/ont/novos")
def ont() :
    return render_template("ont.php")
    
@app.route("/ont/retirada")
def ont_retirada() :
    return render_template("ont_retirada.php")

@app.route("/ont/testes")
def ont_testes() :
    return render_template("ont_testes.php")

@app.route("/relatorio")
def relat() :
    return render_template("relat.php")

@app.route("/php")
def php() :
    return render_template("config.php")

@app.route("/estoque/retirada")
def estoqueontret() :
    return render_template("estoq_ont_ret.php")

@app.route("/estoque/novos")
def estoqueontnew() :
    return render_template("estoq_ont_nov.php") 

@app.route("/estoque/teste")
def estoqueonttest() :
    return render_template("estoq_ont_test.php")  
    
if __name__ == "__main__":
    app.run(debug=True)

