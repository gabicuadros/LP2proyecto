Rails.application.routes.draw do
  resources :laborsocial
  

  # For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  root :to => 'laborsocial#index'
end
