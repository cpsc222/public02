from flask import Flask, request, jsonify, Response
import pwd
import grp

app = Flask(__name__)

USERNAME = "test"

PASSWORD = "abcABC123456"

def check_auth():
	auth = request.authorization
	return auth and auth.username == USERNAME and auth.password == PASSWORD

def require_auth():
	return Response(
	"Unauthorized\n",
	401,
	{"WWW-Authenticate": 'Basic realm="API"'}
	)

@app.route("/api/users", methods=["POST"])

def users():
	if not check_auth():
		return require_auth()
	return jsonify([u.pw_name for u in pwd.getpwall()])

@app.route("/api/groups", methods=["POST"])

def groups():
	if not check_auth():
		return require_auth()
	return jsonify([g.gr_name for g in grp.getgrall()])

if __name__ == "__main__":
	app.run(host="127.0.0.1", port=3000)
