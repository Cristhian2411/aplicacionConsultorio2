<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppConsultorio</title>
</head>
<h1>Ingrese los datos del paciente</h1>
<body>
    <form action="{{url('/')}}" method="post">
     @csrf 
    <input type="text" name="task" id="task">

    <input type="submit" value="agregar nombre">
    <input type="text" name="task" id="task">

<input type="submit" value="agregar apellido">
<input type="text" name="task" id="task">

<input type="submit" value="agregar id">
<input type="text" name="task" id="task">

<input type="submit" value="agregar correo">
<br/>
<br/>
<input type="text" name="task" id="task">

<input type="submit" value="agregar edad">
    </form>
    <br/>
    <table border="1">
        <tr>
            <td>Nombre </td>
            <td>Apellido</td>
            <td>id</td>
            <td>correo</td>
            <td>edad</td>
            <td>Accion</td>

        </tr>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->task }}</td>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <form action="{{route('task.destroy',$task->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="x">
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
    <h1>Ingrese los datos del Medico</h1>
    @csrf
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar nombre">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar apellido">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar id">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar correo">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar edad">
    
    </form>
    <br/>
    <table border="1">
        <tr>
            <td>Nombre </td>
            <td>Apellido</td>
            <td>id</td>
            <td>correo</td>
            <td>edad</td>
            <td>Accion</td>

        </tr>
        
        <tr>
            <td></td>
            <td>x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
    </table>
    <h1>Asignar citas</h1>
    @csrf
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar nombre paciente">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar nombre medico">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar fecha">
    <input type="text" name="task" id="task">
    <input type="submit" value="agregar hora">
    </form>
    <br/>
    <table border="1">
        <tr>
            <td>Nombre del paciente </td>
            <td>nombre del medico</td>
            <td>fecha </td>
            <td>hora</td>
            

        </tr>
        
        <tr>
            <td></td>
            <td>x</td>
            <td></td>
            <td></td>
           
        </tr>
      
    </table>


</body>
</html>