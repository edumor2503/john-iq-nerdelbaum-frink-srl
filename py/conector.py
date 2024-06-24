import mysql.connector
from mysql.connector import Error

def conectar_y_crear_db():
    try:
        # Conectar a MySQL
        connection = mysql.connector.connect(
            host='localhost',
            user='root',
            password=''
        )
        
        cursor = connection.cursor()
        cursor.execute("SHOW DATABASES")
        
        # Verificar si la base de datos existe
        db_existente = False
        for db in cursor:
            if db[0] == 'c':
                db_existente = True
        
        # Crear la base de datos si no existe
        if not db_existente:
            cursor.execute("CREATE DATABASE contactos")
            print("Base de datos creada.")
        
        # Usar la base de datos
        cursor.execute("USE contactos")
        
        # Crear tabla si no existe
        cursor.execute("""
            CREATE TABLE IF NOT EXISTS contactos (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                empresa VARCHAR(255),
                cargo VARCHAR(255),
                rubro VARCHAR(255),
                email VARCHAR(255) NOT NULL,
                telefono VARCHAR(255) NOT NULL,
                mensaje TEXT NOT NULL
            )
        """)
        
        print("Tabla creada o ya existente.")
        
    except Error as e:
        print(f"Error al conectar a MySQL: {e}")
    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("Conexión a MySQL cerrada.")

def insertar_datos(nombre, empresa, cargo, rubro, email, telefono, mensaje):
    try:
        connection = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='contactos'
        )
        
        cursor = connection.cursor()
        
        query = """
            INSERT INTO contactos (nombre, empresa, cargo, rubro, email, telefono, mensaje)
            VALUES (%s, %s, %s, %s, %s, %s, %s)
        """
        valores = (nombre, empresa, cargo, rubro, email, telefono, mensaje)
        
        cursor.execute(query, valores)
        connection.commit()
        
        print("Contacto insertado exitosamente.")
        
    except mysql.connector.Error as e:
        print(f"Error al conectar a MySQL: {e}")
    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("Conexión a MySQL cerrada.")

conectar_y_crear_db()