<?php
final class HomeController extends Controller {
    private NotificationSystem $notificationSystem;
    
    public function __construct() {
        $this->notificationSystem = NotificationSystem::getInstance();
    }
    
    public function index(): string {
        // Notifica sobre acesso à página inicial
        $this->notificationSystem->notify('home_access', [
            'timestamp' => time(),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ]);
        
        return $this->view('auth/welcome', []);
    }
    
    public function termos_uso(): string {
        return $this->view('terms/termos_uso', []);
    }
    
    public function termo_consentimento(): string {
        return $this->view('terms/termo_consentimento', []);
    }
}
