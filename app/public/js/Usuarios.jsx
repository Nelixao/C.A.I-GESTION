import { useEffect, useState } from "react";
import TablaUsuarios from "../components/TablaUsuario";
import Sidebar from "../components/sidebar";
import { crearUsuario, obtenerUsuarios } from "../api/usuarios.api";

export default function Usuarios() {
  const [mostrarForm, setMostrarForm] = useState(false);
  const [usuarios, setUsuarios] = useState([]);

  const [nuevoUsuario, setNuevoUsuario] = useState({
    nombre: "",
    email: "",
    rol: "",
    password: "",
  });

  const cargarUsuarios = async () => {
    try {
      const res = await obtenerUsuarios();
      setUsuarios(res.data);
    } catch (error) {
      console.error("Error cargando usuarios", error);
    }
  };

  useEffect(() => {
    cargarUsuarios();
  }, []);

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      await crearUsuario(nuevoUsuario);
      await cargarUsuarios();
      setMostrarForm(false);
      setNuevoUsuario({
        nombre: "",
        email: "",
        rol: "",
        password: "",
      });
    } catch (error) {
      console.error("Error creando usuario", error);
    }
  };

  return (
    <div className="bodyUsuario">
      <Sidebar />

      <h1 className="usuarioTitulo">Administración de Usuarios</h1>

      <TablaUsuarios usuario={usuarios} cargarUsuarios={cargarUsuarios} />

      <button className="btnUsuarioNuevo" onClick={() => setMostrarForm(true)}>
        Agregar
      </button>

      {mostrarForm && (
        <div className="modalOverlay" onClick={() => setMostrarForm(false)}>
          <div className="modalBox" onClick={(e) => e.stopPropagation()}>
            <form onSubmit={handleSubmit} className="formDispositivo">
              <h2>Usuario Nuevo</h2>

              <input
                placeholder="Nombre"
                value={nuevoUsuario.nombre}
                onChange={(e) =>
                  setNuevoUsuario({
                    ...nuevoUsuario,
                    nombre: e.target.value,
                  })
                }
              />

              <input
                placeholder="Email"
                value={nuevoUsuario.email}
                onChange={(e) =>
                  setNuevoUsuario({
                    ...nuevoUsuario,
                    email: e.target.value,
                  })
                }
              />

              <input
                placeholder="Rol"
                value={nuevoUsuario.rol}
                onChange={(e) =>
                  setNuevoUsuario({
                    ...nuevoUsuario,
                    rol: e.target.value,
                  })
                }
              />

              <input
                placeholder="Contraseña"
                type="password"
                value={nuevoUsuario.password}
                onChange={(e) =>
                  setNuevoUsuario({
                    ...nuevoUsuario,
                    password: e.target.value,
                  })
                }
              />

              <div className="botones">
                <button type="submit">Guardar</button>

                <button type="button" onClick={() => setMostrarForm(false)}>
                  Cancelar
                </button>
              </div>
            </form>
          </div>
        </div>
      )}
    </div>
  );
}
