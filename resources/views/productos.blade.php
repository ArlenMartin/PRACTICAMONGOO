<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        h1 {
  text-align: center;
  font-family: Arial, sans-serif;
  font-size: 1.5em;
  margin-top: 20px;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px auto;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #FFB6C1;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
    <h2 style="text-align:center">PRACTICA LARAVEL CON MONGODB</h2>
    <h1>Nombre:Arlen Martin Martinez</h1>
    <p style="text-align:center"> Grado y Grupo: 5° "B"</p>
    <table>
        <thead>
            <tr>
                <th>_Id </th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $producto): ?>
                <tr>
                    
                    <td><?php echo $producto->_id; ?></td>
                    <td><?php echo $producto->nombre; ?></td>
                    <td><?php echo $producto->precio; ?></td>
                    <td><?php echo $producto->descripcion; ?></td>
                    <td><?php echo $producto->Stock; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
