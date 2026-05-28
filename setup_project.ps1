# Script de configuración para el proyecto ReparaTech en Windows

# Verificar si PHP está instalado
if (-not (Get-Command php -ErrorAction SilentlyContinue)) {
    Write-Host "PHP no está instalado. Por favor, instálalo antes de continuar." -ForegroundColor Red
    exit
}

# Verificar si MySQL está instalado
if (-not (Get-Command mysql -ErrorAction SilentlyContinue)) {
    Write-Host "MySQL no está instalado. Por favor, instálalo antes de continuar." -ForegroundColor Red
    exit
}

# Crear la base de datos y tablas necesarias
Write-Host "Creando la base de datos y tablas..." -ForegroundColor Yellow
$sqlScriptPath = "sql\schema.sql"
$mysqlCommand = "mysql -u root -p < $sqlScriptPath"

try {
    Invoke-Expression $mysqlCommand
    Write-Host "Base de datos creada exitosamente." -ForegroundColor Green
} catch {
    Write-Host "Error al crear la base de datos. Verifica tus credenciales de MySQL." -ForegroundColor Red
    exit
}

# Iniciar el servidor embebido de PHP
Write-Host "Iniciando el servidor embebido de PHP..." -ForegroundColor Yellow
$projectPath = (Get-Location).Path
$phpServerCommand = "php -S localhost:8000 -t $projectPath"

Start-Process powershell -ArgumentList "-NoExit", "-Command", $phpServerCommand

Write-Host "Servidor iniciado en http://localhost:8000" -ForegroundColor Green