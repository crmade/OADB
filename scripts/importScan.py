#!/usr/bin/python
import MySQLdb
#import mysql.connector
from xml.dom import minidom

def insertPort(idserver, port, name,version,protocol,status,date):
	conn = connectDB()
	print ("insert into ports (fk_servers,port,name,version,type,status,lastSeen) values ("+idserver+","+port+",'"+name+"','"+version+"','"+protocol+"','"+status+"','"+date+"';'")          
	#conn.execute("insert into ports (fk_servers,port,name,version,type,status,lastSeen) values ("+idserver+",'"+port+"','"+name+"','"+version+"','"+protocol+"','"+status+"','"+date+"';')
 
def insertServer():
	conn = connectDB()

def connectDB():
	conn = MySQLdb.connect(host= "127.0.0.1",user="oadb_user",passwd="12345678",db="OADB")
	x = conn.cursor()
	return x

# parse an xml file by name
mydoc = minidom.parse('./devices.xml')

hosts = mydoc.getElementsByTagName('host')
ips = mydoc.getElementsByTagName('address')
ports = mydoc.getElementsByTagName('port')
states = mydoc.getElementsByTagName('state')
osmatch = mydoc.getElementsByTagName('osmatch')
#print('IP #2 attribute:')  
#for elem in hosts:
i = 0
for elem in ips:
	#print (elem2.attributes['addr'].value) 
	if elem.attributes['addrtype'].value == 'ipv4':
		print(elem.attributes['addr'].value)
#	print (osmatch[i].attributes['name'].value)
	i += 1
	y = 0

	for elem2 in ports:
			#print(elem2.attributes['protocol'].value)
			protocol = elem2.attributes['protocol'].value
			#print(elem2.attributes['portid'].value)
			port = elem2.attributes['portid'].value
			state = mydoc.getElementsByTagName('state')
			#print (state[y].attributes['state'].value)
			status = state[y].attributes['state'].value
			service = mydoc.getElementsByTagName('service')
			print(service[y].attributes['name'].value)
			#print(service[y].attributes['name'].value)
			name = service[y].attributes['name'].value
			size_name = mydoc.getElementsByTagName('service').length - 1
			#print "entra al loop del service"
			for elem2 in ports:
				print(elem2.attributes['protocol'].value)
				protocol = elem2.attributes['protocol'].value
				print(elem2.attributes['portid'].value)
				port = elem2.attributes['portid'].value
				state = mydoc.getElementsByTagName('state')
				print (state[y].attributes['state'].value)
				status = state[y].attributes['state'].value
				service = mydoc.getElementsByTagName('service')
				print(service[y].attributes['name'].value)
				name = service[y].attributes['name'].value
				if hasattr(service,'product'):
					print(service.attributes['product'].value)
				if hasattr(service,'version'):
					print("Version:"+ " " + service[i].attributes['version'].value)
				#version = service.attributes['product'].value + " " + service[i].attributes['version'].value
				y += 1





# Chock
#			while i <= size_name:
#				if service[i].hasAttribute("product"):
#					print("Product:"+ service[i].attributes['product'].value)
#				else:
#					print("")
#				if  service[i].hasAttribute("version"):
#					print("Version:"+ " " + service[i].attributes['version'].value)
#				else:
#					print("")	
#				y += 1
#				i +=1

#end Chock




#OLD

#	for elem2 in ports:
#		print(elem2.attributes['protocol'].value)
#		protocol = elem2.attributes['protocol'].value
#		print(elem2.attributes['portid'].value)
#		port = elem2.attributes['portid'].value
#		state = mydoc.getElementsByTagName('state')
#		print (state[y].attributes['state'].value)
#		status = state[y].attributes['state'].value
#		service = mydoc.getElementsByTagName('service')
#		print(service[y].attributes['name'].value)
#		name = service[y].attributes['name'].value
#		if hasattr(service,'product'):
#			print(service.attributes['product'].value)
#		if hasattr(service,'version'):
#			print("Version:"+ " " + service[i].attributes['version'].value)
		#version = service.attributes['product'].value + " " + service[i].attributes['version'].value
#		y += 1
#end OLD
#		insertPort("2",port,name,"3.200",protocol,status,"9/9/90")
#		insert into ports (fk_servers , port , name, version, type, status , lastSeen ) values (2, 445, "SMB", "1.3", "TCP", "OPEN", "2017-01-20");
	#print(elem[0].attributes['addr'].value)
#	print(elem.attributes['port'].value)

#print(items[0].attributes['addr'].value)
#print
#print(items[2].attributes['addr'].value)
#print(items[4].attributes['addr'].value)
#print(items[6].attributes['addr'].value)

#port info
# <port protocol="tcp" portid="21"><state state="open" reason="syn-ack" reason_ttl="0"/>
# <service name="ftp" product="vsftpd" version="2.3.4" ostype="Unix" method="probed" conf="10">
# <cpe>cpe:/a:vsftpd:vsftpd:2.3.4</cpe></service></port>




#conn = MySQLdb.connect(host= "127.0.0.1",user="oadb_user",passwd="12345678",db="OADB")
#x = conn.cursor()
#x.execute("insert into servers (ip, name, lastSeen,os) values ('192.168.100.30', 'DNS Server', '2017-01-20', 'Linux')")
#x.execute("SELECT * FROM servers")
#x.execute (" INSERT INTO anooog1 VALUES ('%s','%s') ", (188,90))
#row = x.fetchall()

